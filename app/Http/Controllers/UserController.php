<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    private $user = null;

    public function __construct(User $user)
    {
    	$this->user = $user;
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
