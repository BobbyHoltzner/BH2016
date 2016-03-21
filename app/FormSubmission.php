<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormSubmission extends Model
{
    protected $table = "form_submissions";
    protected $fillable = ['name', 'email', 'message'];

}
