<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserPasswordRequest;
use Illuminate\Support\Facades\Hash;
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
    public function postUpdatePassword(UserPasswordRequest $request, $id)
    {
            $user = User::find($id);
            $hashedPassword = $user->password;

            if (Hash::check($request->old_password, $hashedPassword)) {
                $user->password = bcrypt($request->password);
                $user->save();
                Session::flash('success', 'password updated successfully!');
                return redirect()->route('profile.edit');
            } else { 
                Session::flash('danger', 'Old password is not correct!');
                return redirect()->back();
            }
    }

    public function getMessage()
    {
        $id = Auth::user()->id;
        $messages = Message::with('user')->where('to_user_id', '=', $id)->where('status', '=', 0)->get();
        return view('message')->with('messages', $messages);
    }

    public function getShowMessage($msg_id) {
        $message = Message::with('user')->find($msg_id);
        $message->status = 1;
        $message->save();

        return view('show_message')->with('message', $message);
    }

    public function postMessageReply(Request $request, $id)
    {
        $message = new Message;

        $message->to_user_id = $id;
        $message->from_user_id = Auth::user()->id;
        $message->body = $request->message;
        $message->status = 0;

        $message->save();

        Session:: flash('success', 'Message sent successfully!');
        return redirect()->back();
    }

    public function showAuthor(){

    	return view('author');
    }
}
