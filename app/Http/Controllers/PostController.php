<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use App\Models\Comment;
use App\User;
use App\Models\PostRate;
use Session;
use Purifier;
use Image;
use Illuminate\Http\Response;

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
        $posts = $this->post->with('user')->latest()->paginate(5);
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

        return view('user')->with($data);
    }

    public function getShow($slug)
    {
        $post = $this->post->where('slug', '=', $slug)->with('user', 'category', 'comments')->first();
        $totalComments = count($post->comments);
        $userID = Auth::user()->id;
        $postRating = PostRate::where('post_id', '=', $post->id)->pluck('rating')->avg();
        $ratedUser = PostRate::where('post_id', '=', $post->id)->pluck('user_id');
        $canRate = true;
        $fileName = $post->file;
        $file = "files/".$fileName;

        //$this->updateUserRating($post->id, $postRating);  // Updating User Rating by this post

        foreach($ratedUser as $user)
        {
            if($user == $userID) $canRate = false;
        }

       $data = [
            'post' => $post,
            'userID' => $userID,
            'postRating' => $postRating,
            'canRate' => $canRate,
            'file' => $file,
            'totalComments' => $totalComments
        ];

    	return view('Post.show')->with($data);
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
          'feature-image' => 'sometimes|image',
          'attached_file' => 'sometimes|mimes:doc,pdf,docx,zip'
        ));

        // Making post slug

        $this->slug = str_slug($request->title).'-'.time();

        // Store in the database

        $userId = Auth::user()->id;

        $post = $this->post;
        $post->title = $request->title;
        $post->slug = $this->slug;
        $post->user_id = $userId;
        $post->category_id = $request->category_id;
        $post->body = Purifier::clean($request->input('body'), "youtube"); // Securing post body from malicious codes.

        // Saving Featured Image

        if($request->hasFile('feature-image')) {
          $image = $request->file('feature-image');
          $fileName = time() . '.' .$image->getClientOriginalExtension();
          $location = public_path('images/'.$fileName);
          Image::make($image)->resize(888, 600)->save($location);

          $post->image = $fileName;
        }

        if($request->hasFile('attached_file')) {

            $file = $request->file('attached_file');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $location = public_path('files/');
            $file->move($location, $fileName);

            $post->file = $fileName;
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
            'feature-image' => 'image',
            'attached_file' => 'mimes:doc,pdf,docx,zip'
          ));
          
        $post->title = $request->title;
        $post->category_id = $request->category_id;
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

        if($request->hasFile('attached_file')) {

            $file = $request->file('attached_file');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $location = public_path('files/');
            $file->move($location, $fileName);

            $oldFileName = $post->file;

            Storage::delete($oldFileName);

            $post->file = $fileName;
        }

        $post->save();

        if (isset($request->tags)) {
          $post->tags()->sync($request->tags);
        } else {
          $post->tags()->sync(array());
        }
      
        // Redirect to another page

        return redirect()->route('post.show', $post->slug);
    }

    public function postRating(Request $request, $post_id)
    {
        $user_id = Auth::user()->id;
        $post = Post::find($post_id);
        $postRate = new PostRate;
        $postRate->post_id = $post_id;
        $postRate->user_id = $user_id;
        $postRate->rating = $request->get('rate');

        $postRate->save();
        return redirect()->route('post.show', $post->slug);
    }

    public function updateUserRating($post_id, $postRating)
    {
        $post = $this->post->with('user')->find($post_id);
        $newRating = ($post->user->rating + $postRating)/2.0;
        $user = $this->user->find($post->user->id);
        $user->rating = $newRating;
        $user->save();
    }

    public function getDelete($id)
    {
        $post = $this->post->find($id);
        $post->tags()->detach();
        Storage::delete($post->image);

        $post->delete();

        return redirect()->route('home');
    }

    public function getDownloadFile($post_id)
    {
        $post = $this->post->find($post_id);
        $fileName = $post->file;
        $mime = $post->file->getClientOriginalMime();
        $file = "files/".$fileName;
 
        return (new Response($file, 200))
              ->header('Content-Type', ".pdf");
    }
}