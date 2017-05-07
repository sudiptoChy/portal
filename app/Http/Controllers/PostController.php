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
    	$posts = $this->post->all();
    	return $posts;
    }

    public function show($id)
    {
    	$post = $this->post->find($id);
    	return $post;
    }
}
