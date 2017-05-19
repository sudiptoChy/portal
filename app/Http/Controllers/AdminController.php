<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

class AdminController extends Controller
{
    public function getIndex()
    {
    	return view('admin.index');
    }
    public function getPost()
    {
    	$posts = Post::all();
        return view('admin.posts')->withPosts($posts);
    }
    public function getCategories()
    {
    	$category = Category::all();
        return view('admin.categorylist')->withCategory($category);
    }
    public function getCategoriesEdit()
    {
    	$updatecategory = Category::all();
        return view('admin.updatecategory')->withUpdatecategory($updatecategory);
    }
    public function getTags()
    {
    	$tags = Tag::all();
        return view('admin.taglist')->withTags($tags);
    }
     public function getTagsEdit()
    {
    	$updatetags = Tag::all();
        return view('admin.updatetags')->withUpdatetags($updatetags);
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
