<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;
use App\Models\BlogCategory;

class CategoryController extends Controller
{
    public function blogIndex(Category $category)
    {
        //return view('categories.blog')->with(['blogs' => $blog->categories->getByBlogCategory()]);
        return view('categories.blog')->with(['blogs' => $category->getByBlogCategory()]);
    }
}
