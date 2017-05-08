<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    private $post = null;
    private $category = null;

    public function __construct(Post $post, Category $category)
    {
    	$this->post = $post;
        $this->category = $category;
    }

    public function index()
    {
        $posts = $this->post->latest()->paginate(5);
        $PostByRating = $this->post->orderBy('rating', 'DSC')->take(5)->get();
        $categories = $this->category->all();

        return view('welcome')
                ->with('posts', $posts)
                ->with('PostByRating', $PostByRating)
                ->with('categories', $categories);
    }

    public function show($id)
    {
    	$post = $this->post->find($id);
    	return view('Post.show')->with('post', $post);
    }
}
