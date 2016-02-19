@extends('layouts.dashboard')

@section('title', 'Create New Post')

@section('content')
  <div id="createPost">
    <div id="createPostForm">
      <form action="#" class="form-horizontal group-border-dashed">
        <div class="form-group">
          <input name="title" v-on:blur="titleToSlug()" type="text" id="title" v-model="title" placeholder="Title" class="form-control"/>
        </div>
        <div class="form-group">
            <input name="slug" v-on:blur="slugToSlug()" type="text" v-model="slug" placeholder="Slug" id="slug" class="form-control" />
        </div>
        <div class="form-group">
            <div id="summernote"></div>
        </div>
        <input type="hidden" name="image" id="image" v-model="featured_image" value="" />
        <input type="hidden" id="author" name="author" value="{{Auth::user()->id}}" />
      </form>
      <div id="dropzone">
        <form action="/dashboard/image" class="dropzone dz-clickable" id="featured_image">
          {{ csrf_field() }}
          <div class="dz-message">
            <span class="note">Drop files here or click to upload.</span>
          </div>
        </form>
      </div>
      <div class="submit-group">
        <button v-on:click="createPost()" class="btn btn-primary">Publish Post <i class="icon s7-angle-right"></i></button>
      </div>
    </div>
    <div id="createPostSidebar">
      <div class="panel panel-dark">
        <div class="panel-heading">
          Add Categories
        </div>
        <div class="panel-body">
          <div class="form-group">
            <input name="addCategory" @keyup.enter="addCategory" v-model="category" type="text" placeholder="Add Category" id="addCategory" class="form-control" />
            <input type="hidden" value="{{csrf_token()}}" v-model="token"/>
          </div>
          <div class="form-group">
            <button :disabled="categoryEmpty" v-on:click="addCategory()" class="btn btn-primary">Add Category</button>
          </div>
          <div class="form-group">
            <div id="selectCategories">
              <div class="am-checkbox" v-for="cat in categories">
                <input id="@{{cat.name}}-@{{cat.id}}" value="@{{cat.id}}" v-model="selectedCategories" type="checkbox">
                <label for="@{{cat.name}}-@{{cat.id}}">@{{cat.name}}</label>
                <i class="icon s7-less" id="@{{cat.id}}" v-on:click="deleteCategory($event)"></i>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endSection
