<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;
use App\Models\BlogCategory;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        return view('categories.index')->with(['categories' => $category->getPaginateByLimit()]);
    }
    
    public function category(Category $category)
    {
        return view('categories.category')->with(['category' => $category]);
    }
    
    public function chatIndex(Category $category)
    {
        return view('categories.chat')->with(['chatrooms' => $category->getByChatCategory()]);
    }
    
    public function blogIndex(Category $category)
    {
        //return view('categories.blog')->with(['blogs' => $blog->categories->getByBlogCategory()]);
        return view('categories.blog')->with(['blogs' => $category->getByBlogCategory()]);
    }
    
    public function boardIndex(Category $category)
    {
        return view('categories.board')->with(['boards' => $category->getByBoardCategory()]);
    }
}
