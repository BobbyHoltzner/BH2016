<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';

    protected $fillable = [
      'name', 'slug'
    ];

    public function post_tags(){
      return $this->hasManyThrough('App\PostTag', 'App\Post', 'id', 'post_id');
    }
}
