<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use App\User;
use Session;
use App\Models\Message;
use Auth;


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
        $posts = $this->post->with('user')->latest()->paginate(5);
        $PostByRating = $this->post->orderBy('rating', 'DSC')->take(5)->get();
        $categories = $this->category->all();
        $tags = $this->tag->all();
        $UserByRating = $this->user->orderBy('rating', 'DSC')->take(5)->get();

        if(Auth::check()) {
            
            $totalMessage = $this->totalMessage();
            $totalNotification = $this->totalNotification();

            $data = [
              'posts' => $posts,
              'tags' => $tags,
              'categories' => $categories,
              'PostByRating' => $PostByRating,
              'UserByRating' => $UserByRating,
              'totalMessage' => $totalMessage,
              'totalNotification' => $totalNotification
            ];

            return view('welcome')->with($data);
        } else {
            $data = [
              'posts' => $posts,
              'tags' => $tags,
              'categories' => $categories,
              'PostByRating' => $PostByRating,
              'UserByRating' => $UserByRating
            ];

            return view('welcome')->with($data);
        }
    }

    public function getAbout(){

        return view('aboutus');
    }

    public function getAuthor($id)
    {
        $author = $this->user->find($id);
        $totalPost = $this->post->where('user_id', '=', $id)->get()->count();
        return view('author')
                ->with('author', $author)
                ->with('totalPost', $totalPost);
    }

    public function getMessage($id)
    {
        $author = $this->user->find($id);
        return view('authormessage')->with('author', $author);
    }

    public function postMessage(Request $request, $id)
    {
        $message = new Message;

        $message->to_user_id = $id;
        $message->from_user_id = Auth::user()->id;
        $message->body = $request->message;
        $message->status = 0;

        $message->save();

        Session:: flash('success', 'Message sent successfully!');
        return redirect()->back();
    }

    public function totalMessage()
    {
        $id = Auth::user()->id;
        $totalMessage = Message::with('user')->where('to_user_id', '=', $id)->where('status', '=', 0)->get()->count();
        return $totalMessage;
    }

    public function totalNotification()
    {
        return 5;
    }
}
