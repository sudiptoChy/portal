<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;
use App\User;

class AdminController extends Controller
{
    public function getIndex()
    {
        $totalCategories = Category::get()->count();
        $totalPosts = Post::get()->count();
        $totalTags = Tag::get()->count();
        $totalUsers = User::get()->count();

        $data = [

            'totalCategories' => $totalCategories,
            'totalPosts' => $totalPosts,
            'totalTags' => $totalTags,
            'totalUsers' => $totalUsers
        ];

        return view('admin.index')->with($data);
    }
    public function getPost()
    {
    	$posts = Post::all();
        return view('admin.posts')->withPosts($posts);
    }
    public function getCategories()
    {
        $category = Category::all();
        return view('admin.categorylist')->withCategory($category);
    }
    public function getCategoriesEdit($id)
    {
    	$categories = Category::all();
        $category = Category::find($id);
        return view('admin.updatecategory')
                    ->with('categories', $categories)
                    ->with('category', $category);
    }

    public function categoryStore(Request $request)
    {

        $category = new Category;

        $category->name = $request->category;

        $category->save();

        return redirect()->route('admin.categories');
    }

    public function updateCategory(Request $request, $id)
    {
        $category = Category::find($id);

        $category->name = $request->input('updatecat');

        $category->save();

        return redirect()->route('admin.categories');
    }

    public function destroyCategory($id)
    {
        $category = Category::find($id);

        $category->delete();

        return redirect()->route('admin.categories');
    }

    public function getTags()
    {
    	$tags = Tag::all();
        return view('admin.taglist')->withTags($tags);
    }

    public function getTagsEdit($id)
    {
    	$tags = Tag::all();
        $tag = Tag::find($id);
        return view('admin.updatetags')
                ->with('tags', $tags)
                ->with('tag', $tag);
    }

    public function tagStore(Request $request)
    {

          $tag = new Tag;

          $tag->name = $request->tags;

          $tag->save();

          return redirect()->route('admin.tags');
    }

    public function updateTag(Request $request, $id)
    {
        $tag = Tag::find($id);

        $tag->name = $request->input('tags');

        $tag->save();

        return redirect()->route('admin.tags');
    }

   /* public function destroyTag($id)
    {
        $tag = Tag::find($id);

        $tag->delete();

        return redirect()->route('admin.tags');
    }*/

    public function getUser()
    {
    	return view('admin.adduser');
    }
}
