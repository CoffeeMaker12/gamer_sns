<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
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
    
    public function comment(Request $request, Blog $blog, BlogComment $blogComment)
    {
        return view('blogs.comment')->with(['blog' => $blog, 'comment' => $blogComment]);
    }
    
    public function reply(Request $request, Blog $blog, BlogComment $blogComment)
    {
        return view('blogs.reply')->with(['blog' => $blog, 'comment' => $blogComment]);
    }
    
    public function upreply(Request $request, Blog $blog, BlogComment $blogComment)
    {
        $inputs = request()->validate([
            'body' => 'required|max:300'
        ]);

        $input_reply = BlogComment::create([
            'body' => $inputs['body'],
            'user_id' => \Auth::id(),
            'blog_id' => $request->blog_id,
            'blog_comment_id' => $request->blog_comment_id,
        ]);

        return redirect('/blogs/' . $request->blog_id . '/' . $request->blog_comment_id);
    }
}
