<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Chatroom extends Model
{
    use HasFactory;
    //use SoftDeletes;
    
    protected $fillable = [
        'owner_id',
        'name',
    ];
    
    public function owner() 
    { 
        return $this->belongsTo(User::class); 
    }
    
    public function users() 
    { 
        return $this->belongsToMany(User::class, 'user_chatrooms', 'chatroom_id', 'user_id')->withTimestamps(); 
    }
    
    //「1対多」
    public function messages()
    {
        return $this->hasMany(Message::class);
    }
    
    public function categories() 
    { 
        return $this->belongsToMany(Category::class, 'category_chatrooms', 'chatroom_id', 'category_id')->withTimestamps(); 
    }
    
    public function getPaginateByLimit(int $limit_count = 5)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        //return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
        return $this::with('categories')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
