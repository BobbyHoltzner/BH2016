<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use App\PostCategory;

class PostController extends Controller
{
    public function index(){
      $posts = Post::all();
      return view('cms.posts.index')->with('posts', $posts);
    }

    public function show($slug){
      $post = Post::where('slug', $slug)->first();
      return view('post')->with('post', $post);
    }

    public function create(){
      return view('cms.posts.create');
    }

    public function store(Request $request){
      $post = Post::create([
        'title'   => $request->title,
        'slug'    => $request->slug,
        'content' => $request->content,
        'image'   => $request->image,
        'author'  => $request->author,
      ]);
      foreach ($request->categories as $category){
        $post_category = PostCategory::create([
          'post_id' => $post->id,
          'cat_id'  => $category,
        ]);
      }
    }

    public function edit($id){
      $post = Post::find($id);
      return view('cms.posts.edit')->with('posts', $posts);
    }

    public function delete($id){
      $post = Post::find(id);
      $post->delete();
    }

    public function uploadImage(Request $request){
      $file = $request->file('file');
      $name = time() . $file->getClientOriginalName();

      $file->move(public_path().'/uploads', $name);

      return $name;
    }
}
