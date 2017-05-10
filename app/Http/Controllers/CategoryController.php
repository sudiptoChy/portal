<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    private $category = null;

    public function __construct(Category $category)
    {
    	$this->category = $category;
    }

    public function getIndex()
    {
    	$categories = $this->category->all();
    	return $categories;
    }

    public function getShow($id)
    {
    	$category = $this->category->find($id);
    	return $category;
    }
}
