<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function showAuthor(){

    	return view('author');
    }
}
