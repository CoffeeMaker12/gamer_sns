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
}
