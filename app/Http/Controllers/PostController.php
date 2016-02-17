<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{
    public function index(){
      $posts = Post::all();
      return view('posts')->with('posts', $posts);
    }

    public function create(){
      return view('createPost');
    }
}
