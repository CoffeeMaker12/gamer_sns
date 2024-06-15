<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chatroom extends Model
{
    use HasFactory;
    
    public function owner() 
    { 
        return $this->belongsTo(User::class); 
    }
    
    public function users() 
    { 
        return $this->belongsToMany(User::class, 'user_chatrooms', 'chatroom_id', 'user_id'); 
    }
    
    //「1対多」
    public function messages()
    {
        return $this->hasMany(Message::class);
    }
    
    public function categories() 
    { 
        return $this->belongsToMany(Category::class, 'category_chatrooms', 'chatroom_id', 'category_id'); 
    }
}
