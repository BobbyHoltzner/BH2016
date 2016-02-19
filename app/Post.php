<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
      'title', 'slug', 'content', 'author', 'image'
    ];

    public function post_categories(){
      return $this->hasMany('App\PostCategory');
    }

    public function post_tags(){
      return $this->hasMany('App\PostTag');
    }

    public function author(){
      return $this->belongsTo('App\User');
    }
    public function category_names(){
      return $this->hasMany('App\Category');
    }


}
