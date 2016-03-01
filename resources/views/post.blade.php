@extends('layouts.internal')

@section('content')
    <div class="post">
      <h1>{{$post->title}}</h1>
      <div class="categories">
        @foreach($post->categories as $category)
          <a href="/blog/categories/{{$category->name}}" class="singleCategory">
            {{$category->name}}
          </a>
        @endforeach
      </div>
      {!! $post->content !!}
    </div>
@endsection
