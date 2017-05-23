<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\TeacherRequest;
use Illuminate\Support\Facades\Validator;
use App\Models\Student;
use App\User;
use Session;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
    	return view('signup');
    }

    public function checkUser(Request $request)
    {
    	
       $a = $request->all();
       $dob = $request->get('dob');
       $id = $a['datas']['student']['id'];
       $name = $a['datas']['student']['name'];
       $dep = $a['datas']['student']['department'];

  
        return response()->json([
            'name' => $name,
            'id' => $id,
            'dob' => $dob,
            'dep' => $dep
        ]);
      
    }

    public function register(UserRequest $request)
    {
        $userId = User::where('student_id', '=', $request->student_id)->first();
        $userEmail = User::where('email', '=', $request->email)->first();

        if($userId || $userEmail) {
            
            Session::flash('danger', 'This email or ID has already taken!');
            return redirect()->back();

        } else {
           
            $user = new User;
            $user->student_id = $request->id;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->department = $request->dep;
            $user->birthday = $request->birthday;
            $user->password = bcrypt($request->password);

            $user->save();

            return redirect()->route('user.login');
        }
    }

    public function registerTeacher(TeacherRequest $request) {

            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->department = $request->department;
            $user->password = bcrypt($request->password);

            $user->save();
            return redirect()->route('admin.users');
    }
}
