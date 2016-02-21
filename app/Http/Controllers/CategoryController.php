<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
      $categories = Category::all();
      return view('cms.categories.index', compact('categories'));
    }

    public function show($id)
    {
      return Category::findOrFail($id);
    }

    public function all()
    {
      return Category::all();
    }

    public function store(Request $request)
    {
      Category::create([
        'name'   => $request->name,
        'parent' => 0,
        'slug'   => toSlug($request->name),
        'description' => $request->description,
      ]);
    }

    public function destroy($id)
    {
      $post = Category::find($id);
      $post->delete();
    }
    public function update(Request $request, $id)
    {
      $category = Category::findOrFail($id);
      $category ->name = $request->name;
      $category ->slug = $request->slug;
      $category->parent = $request->parent;
      $category->description = $request->description;
      $category ->save();
    }
}
