<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;


class CategoryChatroom extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'category_id',
        'chatroom_id'
    ];
    
    use HasFactory;
    use SoftDeletes;
    
    //「1対多」の関係なので単数系
    public function chatroom()
    {
        return $this->belongsTo(Chatroom::class);
    }
    
    //「1対多」
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
