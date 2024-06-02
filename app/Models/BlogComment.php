<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogComment extends Model
{
    protected $fillable = [
        'body',
        'user_id',
        'blog_id'
    ];
    
    use HasFactory;
    use SoftDeletes;
    
    //「1対多」の関係なので単数系
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    //「1対多」の関係なので単数系
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
