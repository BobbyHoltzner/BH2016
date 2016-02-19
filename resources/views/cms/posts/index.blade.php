@extends('layouts.dashboard')

@section('title', 'Posts')

@section('content')
<?php var_dump($posts->first()) ?>
  <div class="row">
    <div class="col-sm-12">
      <div class="widget widget-fullwidth widget-small">
        <div class="widget-head">
          <a href="/dashboard/posts/create" class="btn btn-primary">Create New Post <i class="icon s7-pen"></i></a>
        </div>
        <table id="table1" class="table table-striped table-hover table-fw-widget post-table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Slug</th>
              <th>Comments</th>
              <th>Categories</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($posts as $post)
              <tr class="odd gradeX">
                <td class="center">{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->slug}}</td>
                <td class="center">{{count($post->comments)}}</td>
                <td>{{$post->categories}}</td>
                <td class="center">
                  <a class="showPost" target="_blank" href="/{{$post->slug}}"><i class="icon s7-look"></i></a>
                  <a class="editPost" href="/dashboard/posts/{{$post->id}}"><i class="icon s7-note"></i></a>
                  <a class="deletePost" href=""><i class="icon s7-trash"></i></a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
