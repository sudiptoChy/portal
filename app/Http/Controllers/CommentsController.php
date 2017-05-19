<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;

class CommentsController extends Controller
{
    private $comment = null;
    private $post = null;

    public function __construct(Comment $comment, Post $post)
    {
    	$this->comment = $comment;
    	$this->post = $post;
    }

    public function store(Request $request, $post_id)
    {
    	$comment = $this->comment;
    	$comment->post_id = $post_id;
    	$comment->user_id = 2;
    	$comment->comment = $request->comment;

    	$post = $this->post->find($post_id);

    	$comment->save();

    	return redirect()->route('post.show', $post->slug);
    }
}
