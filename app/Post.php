<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'body', 'published'
    ];

    protected function published() {
        return self::where('published', 1)->get();
    }
}


