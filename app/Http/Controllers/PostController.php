<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use App\User;
use Session;
use Purifier;
use Image;
use Storage;

class PostController extends Controller
{
    private $post = null;
    private $category = null;
    private $tag = null;
    private $slug = null;

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

    public function getShow($slug)
    {
    	$post = $this->post->where('slug', '=', $slug)->first();
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
          'category_id' => 'required|integer',
          'body'  => 'required',
          'feature-image' => 'sometimes|image'
        ));

        // Making post slug

        $this->slug = str_slug($request->title).'-'.time();

        // Store in the database

        $post = $this->post;
        $post->title = $request->title;
        $post->slug = $this->slug;
        $post->category_id = $request->category_id;
        $post->body = Purifier::clean($request->input('body'), "youtube"); // Securing post body from malicious codes.

        // Saving Featured Image

        if($request->hasFile('feature-image')) {
          $image = $request->file('feature-image');
          $fileName = time() . '.' .$image->getClientOriginalExtension();
          $location = public_path('images/'.$fileName);
          Image::make($image)->resize(800, 400)->save($location);

          $post->image = $fileName;
        }


        $post->save();
        $post->tags()->sync($request->tags, false);

        // Redirect to another page

        return redirect()->route('home');
    }

    public function getEdit($slug)
    {
        $post = $this->post->where('slug', '=', $slug)->first();
        $categories = $this->category->all();
        $tags = $this->tag->all();

        $data = [
            'post' => $post,
            'categories' => $categories,
            'tags' => $tags
        ];
        
        return view('Post.edit')->with($data);
    }

    public function postEdit(Request $request, $slug)
    {
        // Validating the request

        $post = $this->post->where('slug', '=', $slug)->first();

          $this->validate($request, array(
            'title' => 'required|max:255',
            'category_id' => 'required|integer',
            'body'  => 'required',
            'feature-image' => 'image'
          ));
          
        $post->title = $request->input('title');
        $post->category_id = $request->input('category_id');
        $post->body = Purifier::clean($request->input('body'), "youtube"); // Securing post body from malicious codes

        if($request->hasFile('feature-image')) {
            
            $image = $request->file('feature-image');
            $fileName = time() . '.' .$image->getClientOriginalExtension();
            $location = public_path('images/'.$fileName);
            Image::make($image)->resize(800, 400)->save($location);

            $oldFileName = $post->image;

            $post->image = $fileName;

            Storage::delete($oldFileName);
        }

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
        Storage::delete($post->image);

        $post->delete();

        return redirect()->route('home');
    }
}