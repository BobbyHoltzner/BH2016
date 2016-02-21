@extends('layouts.dashboard')

@section('title', 'Categories')

@section('content')
  <div class="row" id="categoryManagement" v-cloak>
    <div class="col-sm-4" id="addCategory">
      <h3 v-if="!editMode">Add New Category</h3>
      <h3 v-if="editMode">Update Category</h3>
      <div class="form-group">
        <input id="categoryName" type="text" v-on:blur="nameToSlug" class="form-control" v-model="name" placeholder="Name">
      </div>
      <div class="form-group">
        <input type="text" class="form-control" v-on:blur="slugToSlug" v-model="slug" placeholder="Slug">
      </div>
      <div class="form-group">
        <select v-model="parent" class="form-control">
          <option value="0" selected>Select a parent (Leave blank for top level)</option>
          <option v-for="category in categories" value="@{{category.id}}">@{{category.name}}</option>
        </select>
      </div>
      <div class="form-group">
        <textarea v-model="description" class="form-control" placeholder="Enter the description"></textarea>
      </div>
      <div v-if="!editMode" class="form-group">
        <button class="btn btn-primary" v-on:click="createCategory">Add New Category <i class="icon s7-plus"></i></button>
      </div>
      <div v-if="editMode" class="form-group">
        <button class="btn btn-primary" v-on:click="updateCategory()">Update Category <i class="icon s7-diskette"></i></button>
        <button class="btn btn-primary btn-cancel" v-on:click="cancelEdit">Cancel <i class="icon s7-close"></i></button>
      </div>
      <input type="hidden" v-model="token" value="{{csrf_token()}}">
    </div>
    <div class="col-sm-8">
      <h3>All Categories</h3>
      <div class="widget widget-fullwidth widget-small">
        <table id="categories-table" class="table table-striped table-hover table-fw-widget post-table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Slug</th>
              <th>Description</th>
              <th>Post Count</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($categories as $category)
              <tr class="odd gradeX">
                <td class="center">{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->slug}}</td>
                <td>{{substr($category->description, 0, 40)}}...</td>
                <td></td>
                <td class="center">
                  <a class="showPost" target="_blank" href="/categories/{{$category->slug}}"><i class="icon s7-look"></i></a>
                  <a class="editPost" href="#" v-on:click="editCategory($event)"><i id="{{$category->id}}" class="icon s7-note"></i></a>
                  <a class="deletePost" href="#" v-on:click="confirmDeleteCategory($event)"><i id="{{$category->id}}" class="icon s7-trash"></i></a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
