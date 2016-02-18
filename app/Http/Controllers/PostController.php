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
      return view('cms.posts.index')->with('posts', $posts);
    }

    public function create(){
      return view('cms.posts.create');
    }

    public function publish(Request $request){
      Post::create([
        'title'   => $request->title,
        'slug'    => $request->slug,
        'content' => $request->content,
      ]);
    }

    public function edit($id){
      $post = Post::find($id);
      return view('cms.posts.edit')->with('posts', $posts);
    }

    public function delete($id){
      $post = Post::find(id);
      $post->delete();
    }
}
