<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogComment;

class BlogCommentController extends Controller
{
    public function store(Request $request, BlogComment $blogComment)
    {
        $inputs = request()->validate([
            'body' => 'required|max:300'
        ]);

        $input_comment = BlogComment::create([
            'body' => $inputs['body'],
            'user_id' => \Auth::id(),
            'blog_id' => $request->blog_id,
        ]);

        return redirect('/blogs/' . $request->blog_id);
    }
}
