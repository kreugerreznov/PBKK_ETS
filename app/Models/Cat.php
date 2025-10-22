<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'rating',
        'image',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
