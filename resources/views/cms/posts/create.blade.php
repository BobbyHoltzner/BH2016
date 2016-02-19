@extends('layouts.dashboard')

@section('title', 'Create New Post')

@section('content')
  <div id="createPost">
    <div id="createPostForm">
      <form action="#" class="form-horizontal group-border-dashed">
        <div class="form-group">
          <input name="title" type="text" id="title" v-model="title" placeholder="Title" class="form-control"/>
        </div>
        <div class="form-group">
            <input name="slug" type="text" v-model="slug" placeholder="Slug" id="slug" class="form-control" />
        </div>
        <div class="form-group">
            <div id="summernote"></div>
        </div>
      </form>
      <div id="dropzone">
        <form action="/dashboard/image" class="dropzone dz-clickable" id="featured_image">
          {{ csrf_field() }}
          <div class="dz-message">Drop files here or click to upload.
            <br> <span class="note">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
          </div>
        </form>
      </div>
      <div class="submit-group">
        <button v-on:click="submit()" class="btn btn-primary">Publish Post <i class="icon s7-angle-right"></i></button>
      </div>
    </div>
    <div id="createPostSidebar">
      <div class="panel panel-dark">
        <div class="panel-heading">
          Add Categories
        </div>
        <div class="panel-body">
          <div class="form-group">
            <input name="addCategory" v-model="category" type="text" placeholder="Add Category" id="addCategory" class="form-control" />
          </div>
          <div class="form-group">
            <button v-on:click="addCategory()" class="btn btn-primary">Add Category</button>
          </div>
          <div class="form-group">
            <div id="selectCategories">
              <div class="am-checkbox">
                <input id="check3" type="checkbox">
                <label for="check3">Option 1</label>
              </div>
              <div class="am-checkbox">
                <input id="check4" type="checkbox">
                <label for="check4">Option 2</label>
              </div>
              <div class="am-checkbox">
                <input id="check5" type="checkbox">
                <label for="check5">Option 3</label>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endSection
