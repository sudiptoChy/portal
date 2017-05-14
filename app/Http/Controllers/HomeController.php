<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use App\User;
use Session;


class HomeController extends Controller
{
    private $category = null;
    private $tag = null;
    private $post = null;
    private $user = null;

    public function __construct(Category $category, Tag $tag, Post $post, User $user)
    {
    	$this->category = $category;
    	$this->tag = $tag;
    	$this->post = $post;
    	$this->user = $user;
    }

    public function getIndex()
    {
        $posts = $this->post->latest()->paginate(5);
        $PostByRating = $this->post->orderBy('rating', 'DSC')->take(5)->get();
        $categories = $this->category->all();
        $tags = $this->tag->all();
        $UserByRating = $this->user->orderBy('rating', 'DSC')->take(5)->get();

        $data = [
          'posts' => $posts,
          'tags' => $tags,
          'categories' => $categories,
          'PostByRating' => $PostByRating,
          'UserByRating' => $UserByRating
        ];

        return view('welcome')->with($data);
    }

    public function getAbout(){

        return view('aboutus');
    }

    public function getAuthor()
    {
        return view('author');
    }
}
