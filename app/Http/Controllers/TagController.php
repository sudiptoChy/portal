<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    private $tag = null;

    public function __construct(Tag $tag)
    {
    	$this->tag = $tag;
    }

    public function getIndex()
    {
    	$tags = $this->tag->all();
    	return $tags;
    }

    public function getShow($id)
    {
    	$tag = $this->tag->find($id);
    	return $tag;
    }
}
