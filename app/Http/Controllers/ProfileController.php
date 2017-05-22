<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\User;
use Session;
use Auth;
use Image;

class ProfileController extends Controller
{
    public function getIndex(){

        return view('userprofile', array('user' => Auth::user()));
    }
    public function getEdit(){

    	return view('editprofile', array('user' => Auth::user()));
    }

    public function updateAvatar(Request $request)
    {
        if($request->hasFile('avatar')) {

          $avatar = $request->file('avatar');
          $fileName = time() . '.' .$avatar->getClientOriginalExtension();
          $location = public_path('uploads/avatars/'.$fileName);
          Image::make($avatar)->resize(300, 300)->save($location);

          $user = Auth::user();
          $user->avatar = $fileName;
          $user->save();
          return view('editprofile', array('user' => Auth::user()));
        }
    }
    public function editPass(){

    	return view('changepass');
    }

    public function getMessage()
    {
        $id = Auth::user()->id;
        $messages = Message::with('user')->where('to_user_id', '=', $id)->where('status', '=', 0)->get();
        return view('message')->with('messages', $messages);
    }

    public function showAuthor(){

    	return view('author');
    }
}
