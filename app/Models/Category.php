<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function blogs() 
    { 
        return $this->belongsToMany(Blog::class, 'blog_categories', 'category_id', 'blog_id'); 
    }
    
    //「1対多」
    /*
    public function blog_categories()
    {
        return $this->hasMany(BlogCategory::class);
    }
    */
    
    public function boards()
    {
        return $this->belongsToMany(Board::class, 'board_categories', 'category_id', 'board_id');
    }
    
    public function chatrooms() 
    { 
        return $this->belongsToMany(Chatroom::class, 'category_chatrooms', 'category_id', 'chatroom_id'); 
    }
    
    public function getByChatCategory(int $limit_count = 5)
    {
         return $this->chatrooms()->with('categories')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function getByBlogCategory(int $limit_count = 5)
    {
         return $this->blogs()->with('categories')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function getByBoardCategory(int $limit_count = 5)
    {
         return $this->boards()->with('categories')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
}
