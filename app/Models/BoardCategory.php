<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;


class BoardCategory extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'blog_id',
        'category_id'
    ];
    
    use HasFactory;
    use SoftDeletes;
    
    //「1対多」の関係なので単数系
    public function board()
    {
        return $this->belongsTo(Board::class);
    }
    
    //「1対多」
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
