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
      return Category::all();
    }

    public function show(Category $category)
    {
      return Category::find($category);
    }

    public function store(Request $request)
    {
      Category::create([
        'name' => $request->name,
        'parent' => 0,
      ]);
    }

    public function destroy($id)
    {
      $post = Category::find($id);
      $post->delete();
    }
}
