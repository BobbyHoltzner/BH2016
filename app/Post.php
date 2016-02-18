<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $dates = 'published_at';

    protected $fillable = [
      'title', 'slug', 'content', 'author'
    ];

    public function post_categories(){
      return $this->hasMany(PostCategory::class);
    }

    public function post_tags(){
      return $this->hasMany(PostTag::class);
    }

    public function author(){
      return $this->belongsTo(User::class);
    }


}
