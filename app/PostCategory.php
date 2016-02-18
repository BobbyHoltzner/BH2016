<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    protected $table = 'post_categories';

    protected $fillable = [
      'post_id', 'cat_id',
    ];

    public function post(){
      return $this->belongsTo(Post::class);
    }
}
