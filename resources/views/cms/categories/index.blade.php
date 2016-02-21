@extends('layouts.dashboard')

@section('title', 'Tags')

@section('content')
  <div class="row">
    <div class="col-sm-12">
      <div class="widget widget-fullwidth widget-small">
        <div class="widget-head">
          <a href="/dashboard/posts/create" class="btn btn-primary">Create New Category <i class="icon s7-pen"></i></a>
        </div>
        <table id="table1" class="table table-striped table-hover table-fw-widget post-table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Slug</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($categories as $category)
              <tr class="odd gradeX">
                <td class="center">{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->slug}}</td>
                <td class="center">
                  <a class="showPost" target="_blank" href="/{{$category->slug}}"><i class="icon s7-look"></i></a>
                  <a class="editPost" href="/dashboard/posts/{{$category->id}}"><i class="icon s7-note"></i></a>
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
