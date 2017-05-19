<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getIndex()
    {
    	return view('admin.index');
    }
    public function getPost()
    {
    	return view('admin.posts');
    }
    public function getCategories()
    {
    	return view('admin.categorylist');
    }
    public function getCategoriesEdit()
    {
    	return view('admin.updatecategory');
    }
    public function getTags()
    {
    	return view('admin.taglist');
    }
     public function getTagsEdit()
    {
    	return view('admin.updatetags');
    }
    public function getUser()
    {
    	return view('admin.adduser');
    }
    public function getDashboard()
    {
    	return view('admin.index');
    }
}
