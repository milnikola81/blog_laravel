<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'body', 'published', 'user_id', 'tags'
    ];

    protected function published() {
        return self::where('published', 1)->get();
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function user() {
        return $this->belongsTo(User::Class); // this will return join of comments associated wwith movie
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
}


