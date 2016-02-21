@extends('layouts.dashboard')

@section('title', 'Tags')

@section('content')
  <div class="row">
    <div class="col-sm-4" id="addTag">
      <h3>Add New Tag</h3>
      <div class="form-group">
        <input type="text" v-on:blur="nameToSlug" class="form-control" v-model="name" placeholder="Name">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" v-model="slug" placeholder="Slug">
      </div>
      <div class="form-group">
        <button class="btn btn-primary" v-on:click="createTag">Add New Tag <i class="icon s7-plus"></i></button>
      </div>
      <input type="hidden" v-model="token" value="{{csrf_token()}}">
    </div>
    <div class="col-sm-8">
      <div class="widget widget-fullwidth widget-small">
        <table id="tags-table" class="table table-striped table-hover table-fw-widget post-table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Slug</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
              <tr class="odd gradeX" v-for="tag in tags">
                <td class="center"></td>
                <td></td>
                <td></td>
                <td class="center">
                  <a class="showPost" target="_blank" href="/"><i class="icon s7-look"></i></a>
                  <a class="editPost" href="/dashboard/posts/"><i class="icon s7-note"></i></a>
                  <a class="deletePost" href=""><i class="icon s7-trash"></i></a>
                </td>
              </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
