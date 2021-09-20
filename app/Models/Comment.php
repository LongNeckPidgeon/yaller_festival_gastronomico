<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment',
        'score',
    ];

    public function resturant()
    {
        return $this->belongsTo(Restaurant::class);
    } 
}
