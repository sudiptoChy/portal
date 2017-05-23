<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
    	return view('login');
    }
    
    public function login(Request $request)
    {
        if(Auth::attempt([
            'student_id' => $request->get('id'),
            'password' => $request->get('password')
        ])){
            return redirect()->route('home');
        }
        else
        {
            $userEmail = $request->get('id');
            $user = User::where('email', '=', $userEmail)->first();
            if($user) {
                Auth::login($user, true);
                return redirect()->route('home');

            } else {
                return redirect()->back();
            }

            return redirect()->back();
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}