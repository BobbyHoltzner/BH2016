@extends('layouts.dashboard')

@section('title', 'Tags')

@section('content')
  <div class="row" id="tagManagement" v-cloak>
    <div class="col-sm-4" id="addTag">
      <h3 v-if="!editMode">Add New Tag</h3>
      <h3 v-if="editMode">Update Tag</h3>
      <div class="form-group">
        <input id="tagName" type="text" v-on:blur="nameToSlug" class="form-control" v-model="name" placeholder="Name">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" v-on:blur="slugToSlug" v-model="slug" placeholder="Slug">
      </div>
      <div v-if="!editMode" class="form-group">
        <button class="btn btn-primary" v-on:click="createTag">Add New Tag <i class="icon s7-plus"></i></button>
      </div>
      <div v-if="editMode" class="form-group">
        <button class="btn btn-primary" v-on:click="updateTag()">Update Tag <i class="icon s7-diskette"></i></button>
        <button class="btn btn-primary btn-cancel" v-on:click="cancelEdit">Cancel <i class="icon s7-close"></i></button>
      </div>
      <input type="hidden" v-model="token" value="{{csrf_token()}}">
    </div>
    <div class="col-sm-8">
      <h3>All Tags</h3>
      <div class="widget widget-fullwidth widget-small">
        <table id="tags-table" class="table table-striped table-hover table-fw-widget post-table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Slug</th>
              <th>Post Count</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($tags as $tag)
              <tr class="odd gradeX">
                <td class="center">{{$tag->id}}</td>
                <td>{{$tag->name}}</td>
                <td>{{$tag->slug}}</td>
                <td>{{count($tag->post_tags())}}</td>
                <td class="center">
                  <a class="showPost" target="_blank" href="/tags/{{$tag->slug}}"><i class="icon s7-look"></i></a>
                  <a class="editPost" href="#" v-on:click="editTag($event)"><i id="{{$tag->id}}" class="icon s7-note"></i></a>
                  <a class="deletePost" href="#" v-on:click="confirmDeleteTag($event)"><i id="{{$tag->id}}" class="icon s7-trash"></i></a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
