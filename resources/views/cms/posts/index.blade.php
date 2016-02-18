@extends('layouts.dashboard')

@section('title', 'Posts')

@section('content')
  <div class="row">
    <div class="col-sm-12">
      <div class="widget widget-fullwidth widget-small">
        <div class="widget-head">
          <div class="tools"><span class="icon s7-upload"></span><span class="icon s7-edit"></span><span class="icon s7-close"></span></div>
          <a href="/dashboard/posts/create" class="btn btn-primary">Create New Post <i class="icon s7-angle-right"></i></a>
        </div>
        <table id="table1" class="table table-striped table-hover table-fw-widget">
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
                <td class="center">{{$post->ID}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->slug}}</td>
                <td class="center">{{count($post->comments)}}</td>
                <td>{{$post->categories}}</td>
                <td class="center"></td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
