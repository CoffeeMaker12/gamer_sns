<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $fillable = [
        'title',
        'body',
        'user_id',
        'boardtype_id',
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
        return $this->belongsToMany(Category::class, 'board_categories', 'board_id', 'category_id')->withTimestamps();
    }
    
    //「1対多」
    public function boardtype()
    {
        return $this->belongsTo(Boardtype::class);
    }
    
    public function getByLimit(int $limit_count = 10)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->limit($limit_count)->get();
    }
    
    public function getPaginateByLimit(int $limit_count = 5)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
        //return $this::with('categories')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
