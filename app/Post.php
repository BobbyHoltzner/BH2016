<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $dates = 'published_at';

    protected $fillable = [
      'title', 'slug', 'content',
    ];

    
}
