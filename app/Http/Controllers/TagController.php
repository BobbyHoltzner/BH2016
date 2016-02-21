<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tag;

class TagController extends Controller
{
  public function index(){
    $tags = Tag::all();
    return view('cms.tags.index', compact('tags'));
  }
  public function store(Request $request){
    $tag = Tag::create([
      'name' => $request->name,
      'slug' => $request->name,
    ]);
  }
  public function all(){
    return Tag::all();
  }
}
