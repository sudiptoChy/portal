<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use Session;

class PostController extends Controller
{
    private $post = null;
    private $category = null;
    private $tag = null;

    public function __construct(Post $post, Category $category, Tag $tag)
    {
    	$this->post = $post;
        $this->category = $category;
        $this->tag = $tag;
    }

    public function getIndex()
    {
        $posts = $this->post->latest()->paginate(5);
        $PostByRating = $this->post->orderBy('rating', 'DSC')->take(5)->get();
        $categories = $this->category->all();

        return view('welcome')
                ->with('posts', $posts)
                ->with('PostByRating', $PostByRating)
                ->with('categories', $categories);
    }

    public function getShow($id)
    {
    	$post = $this->post->find($id);
    	return view('Post.show')->with('post', $post);
    }

    public function getCreate()
    {
        $categories = $this->category->all();
        $tags = $this->tag->all();

        $data =[

            'categories' => $categories,
            'tags' => $tags,

        ];

        return view('Post.create')->with($data);
    }

    public function postStore(Request $request)
    {

        $this->validate($request, array(
          'title' => 'required|max:255',
          'slug' => 'required|alpha_dash|min:5|max:255',
          'category_id' => 'required|integer',
          'body'  => 'required'
        ));

        // Store in the database
        $post = $this->post;
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->category_id = $request->category_id;
        $post->body = $request->body;
        $post->save();
        $post->tags()->sync($request->tags, false);

      // Redirect to another page
      return redirect()->route('home');
    }

    public function getEdit($id)
    {

    }

    public function postEdit($id)
    {

    }

    public function getDelete($id)
    {
        
    }
}
