<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    private $post = null;

    public function __construct(Post $post)
    {
    	$this->post = $post;
    }

    public function index()
    {
        $posts = $this->post->latest()->paginate(5);
        return view('welcome')->with('posts', $posts);
    }

    public function show($id)
    {
    	$post = $this->post->find($id);
    	return view('Post.show')->with('post', $post);
    }
}
