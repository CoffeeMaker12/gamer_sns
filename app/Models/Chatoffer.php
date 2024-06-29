<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chatoffer extends Model
{
    protected $fillable = [
        'user_id',
        'chatroom_id'
    ];
    
    use HasFactory;
    
    //「1対多」の関係なので単数系
    public function user()
    {
        return $this->belongsTo(user::class);
    }
    
    //「1対多」
    public function chatroom()
    {
        return $this->belongsTo(Chatroom::class);
    }
}
