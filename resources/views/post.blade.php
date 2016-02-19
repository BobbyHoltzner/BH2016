@extends('layouts.app')

@section('content')
  <div class="wrapper">
    <h1>{{$post->title}}</h1>
    <pre>
      <?php print_r($post->category_names) ?>
    </pre>
  </div>
@endsection
