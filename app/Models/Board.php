<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $fillable = [
        'title',
        'body',
        'user_id'
    ];
    
    use HasFactory;
    use SoftDeletes;
    
    //「1対多」の関係なので単数系
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    //「1対多」
    public function board_comments()
    {
        return $this->hasMany(BoardComment::class);
    }
    
    //「多対多」
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    
    //「1対多」
    public function board_type()
    {
        return $this->belongsTo(Boardtype::class);
    }
}
