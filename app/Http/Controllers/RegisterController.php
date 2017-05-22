<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Validator;
use App\Models\Student;
use App\User;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
    	return view('signup');
    }

    public function checkUser(Request $request)
    {
    	
       $a = $request->all();
       dd($a['datas']['student']['name']);

        $student = Student::find($request->id);
    	if($student) {
    		if($student->birthday == $request->birthday) {
    		$birthday = $request->birthday;
    		$id = $request->id;
    		$name = $student->name;
    		return view('signup2')
    				->with('birthday', $birthday)
    				->with('id', $id)
    				->with('name', $name);
	    	} else {
	    		return redirect()->back();
	    	}
    	} else {
    		return redirect()->back();
    	}
    }

    public function register(UserRequest $request)
    {
        $user = new User;
        $user->student_id = $request->id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->birthday = $request->birthday;
        $user->password = bcrypt($request->password);

        $user->save();

        return redirect()->route('user.login');
    }
}
