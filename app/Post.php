<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
      'title', 'slug', 'content', 'author', 'image'
    ];

    public function categories(){
      return $this->hasManyThrough('App\Category', 'App\PostCategory', 'post_id', 'id');
    }

    public function tags(){
      return $this->hasManyThrough('App\Tag', 'App\PostTag', 'post_id', 'id');
    }

    public function author(){
      return $this->belongsTo('App\User');
    }
}
