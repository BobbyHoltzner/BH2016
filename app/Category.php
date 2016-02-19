<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name', 'parent', 'image' ];

    public function cat_relationship(){
      return $this->hasOne('App\PostCategory');
    }
}
