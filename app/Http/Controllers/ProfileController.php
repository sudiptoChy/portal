<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\User;
use Session;
use Auth;

class ProfileController extends Controller
{
    public function getIndex(){

    	return view('userprofile');
    }
    public function getEdit(){

    	return view('editprofile');
    }
    public function editPass(){

    	return view('changepass');
    }

    public function getMessage()
    {
        $id = Auth::user()->id;
        $messages = Message::with('user')->where('to_user_id', '=', $id)->get();
        return view('message')->with('messages', $messages);
    }

    public function showAuthor(){

    	return view('author');
    }
}
