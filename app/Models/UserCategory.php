<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;


class UserCategory extends Model
{
    use HasFactory;
    
    protected $fillable = [
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
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
