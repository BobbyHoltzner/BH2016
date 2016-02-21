<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name', 'parent', 'image', 'slug', 'description' ];

    public function post_categories(){
      return $this->hasManyThrough('App\Post', 'App\PostCategory', 'post_id', 'id');
    }

}
