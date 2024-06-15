<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boardtype extends Model
{
    use HasFactory;
    
    public function boards()
    {
        return $this->hasMany(Board::class);
    }
    
    public function getByBoardtype(int $limit_count = 5)
    {
         return $this->boards()->with('boardtype')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
