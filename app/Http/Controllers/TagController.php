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
      'slug' => $request->slug,
    ]);
  }
  public function all(){
    return Tag::all()->toJson();
  }

  public function show($id){
    return Tag::findOrFail($id);
  }

  public function destroy($id){
    $tag = Tag::findOrFail($id);
    $tag->delete();
  }

  public function update(Request $request, $id){
    $tag = Tag::findOrFail($id);
    $tag->name = $request->name;
    $tag->slug = $request->slug;
    $tag->save();
  }
}
