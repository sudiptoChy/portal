<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Message;

class UserController extends Controller
{
    private $user = null;

    public function __construct(User $user, Message $message)
    {
    	$this->user = $user;
        $this->message = $message;
    }

    public function index()
    {
    	$users = $this->user->all();
    	return $users;
    }

    public function show($id)
    {
    	$user = $this->user->find($id);
    	return $user;
    }

    public function sendMessage(Request $request, $from_user_id, $to_user_id)
    {
        $this->validate(array(
            'body' => 'required',
        ))

        $message = $this->message;
        $message->from_user_id = $from_user_id;
        $message->to_user_id = $to_user_id;
        $message->body = $request->body;

        $message->save();

        return redirect()->route('author');
    }

    public function create(Request $request)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request)
    {

    }

    public function delete($id)
    {

    }

    public function getMessage(){

        return view('message');
    }
}
