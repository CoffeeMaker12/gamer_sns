<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function blogIndex(Category $category)
    {
        return view('categories.index')->with(['blogs' => $category->getByCategory()]);
    }
}
