<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';

    protected $fillable = [
      'setting', 'value', 'type',
    ];


    public function user(){
      return $this->hasMany(User::class);
    }
}
