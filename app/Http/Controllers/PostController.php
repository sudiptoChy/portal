<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use App\User;
use Session;
use Purifier;

class PostController extends Controller
{
    private $post = null;
    private $category = null;
    private $tag = null;

    public function __construct(Post $post, Category $category, Tag $tag, User $user)
    {
    	  $this->post = $post;
        $this->category = $category;
        $this->tag = $tag;
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

    public function postCreate(Request $request)
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
        $post->body = Purifier::clean($request->input('body'), "youtube"); // Securing post body from malicious codes.
        $post->save();
        $post->tags()->sync($request->tags, false);

      // Redirect to another page
      return redirect()->route('home');
    }

    public function getEdit($id)
    {
        $post = $this->post->find($id);
        $categories = $this->category->all();
        $tags = $this->tag->all();

        $data = [
            'post' => $post,
            'categories' => $categories,
            'tags' => $tags
        ];
        
        return view('Post.edit')->with($data);
    }

    public function postEdit(Request $request, $id)
    {
        // Validating the request

        $post = $this->post->find($id);

        if($request->input('slug') == $post->slug)
        {
            $this->validate($request, array(
              'title' => 'required|max:255',
              'body'  => 'required',
              'category_id' => 'required|integer'
            ));
        } else {
            $this->validate($request, array(
              'title' => 'required|max:255',
              'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
              'category_id' => 'required|integer',
              'body'  => 'required'
            ));
        }
          
      $post->title = $request->input('title');
      $post->slug = $request->input('slug');
      $post->category_id = $request->input('category_id');
      $post->body = Purifier::clean($request->input('body'), "youtube"); // Securing post body from malicious codes
      $post->save();

      if (isset($request->tags)) {
        $post->tags()->sync($request->tags);
      } else {
        $post->tags()->sync(array());
      }
      
      // Redirect to another page

      return redirect()->route('post.show', $post->id);
    }

    public function getDelete($id)
    {
        $post = $this->post->find($id);
        $post->tags()->detach();
        $post->delete();
        return redirect()->route('home');
    }
}