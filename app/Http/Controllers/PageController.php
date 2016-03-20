<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function blog(){
      return view('blog');
    }
    public function projects(){
      return view('projects');
    }
    public function contact(){
      return view('contact');
    }
}
