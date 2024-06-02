<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Blog extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'body',
        'user_id',
        'category_id'
    ];
    
    use HasFactory;
    use SoftDeletes;
    
    //「1対多」の関係なので単数系
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    //「1対多」
    public function blog_comments()
    {
        return $this->hasMany(BlogComment::class);
    }
    
    //「多対多」
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
