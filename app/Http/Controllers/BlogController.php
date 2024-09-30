<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Models\Category;
use App\Models\BlogCategory;

class BlogController extends Controller
{
    public function index(Blog $blog)
	{
	    return view('blogs.index')->with(['blogs' => $blog->getPaginateByLimit()]);
	    //getPaginateByLimit()はPost.phpで定義したメソッド
	} 
	
	public function show(Blog $blog)
	{
	    return view('blogs.show')->with(['blog' => $blog]);
	}
	
	public function create(Category $category, Blog $blog)
	{
	    return view('blogs.create')->with(['categories' => $category->get(), 'blog' => $blog]);
	}
	
	public function store(BlogRequest $request, Blog $blog, BlogCategory $blogCategory)
	{
	    $input = $request['blog'];
	    $input2 = $request['blog_category'];
	    $blog->user_id = \Auth::id();
	    $blog->fill($input)->save();
	    $blog->categories()->attach($request->blog_category);
	    return redirect('/blogs/' . $blog->id);
	}
	
	public function edit(Blog $blog)
	{
	    return view('blogs.edit')->with(['blog' => $blog]);
	}
	
	public function update(BlogRequest $request, Blog $blog)
	{
	    $input_blog = $request['blog'];
	    $blog->fill($input_blog)->save();
	
	    return redirect('/blogs/' . $blog->id);
	}
	
	public function delete(Blog $blog)
	{
	    $blog->delete();
	    return redirect('/blogs');
	}
}
