<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'cat_id',
        'username',
        'content',
    ];

    public function cat()
    {
        return $this->belongsTo(Cat::class);
    }
}
