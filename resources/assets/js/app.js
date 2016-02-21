import Vue from 'vue';
Vue.use(require('vue-resource'));

$("div#dropzone2").dropzone({ url: "/file/post" });

if(document.getElementById('createPost')){
  var CreatePostForm = new Vue({
    el: '#createPost',
    data: {
      title: '',
      slug: '',
      categorySlug: '',
      tagSlug: '',
      category: '',
      categories:[],
      selectedCategories: [],
      token: '',
      featured_image: '',
      tag:'',
      tags: [],
      selectedTags: [],
    },
    ready(){
      this.getCategories();
      this.getTags();
    },
    methods: {
      getCategories(){
        this.$http({
          url: '/dashboard/categories/all',
          method: 'GET'
        }).then((response) =>{
          var data = response.data;
          var category = {};
          for(var i=0; i < data.length; i++){
            category = {name: data[i].name, id: data[i].id, checked: false};
            this.categories.push(category);
          }
        }, (reponse) => {
          // Handle the error
        });
      },
      addCategory(){
        if(this.category){
          this.addCategorySlug();
          this.$http({
            url: '/dashboard/categories',
            method: 'POST',
            data: {
              _token: this.token,
              name: this.category,
              slug: this.categorySlug,
              description: '',
            }
          }).then((data) =>{
            this.categories = [];
            this.getCategories();
            this.category = '';
            this.categorySlug = '';
          }, (reponse) => {
            // Handle the error
          });
        }
      },
      deleteCategory(e){
        var id = e.target.id;
        this.$http({
          url: '/dashboard/categories/'+id ,
          method: 'DELETE',
          data: {
            _token: this.token,
          }
        }).then((data) =>{
          this.categories = [];
          this.getCategories();
        }, (reponse) => {
          // Handle the error
        });
      },
      getTags(){
        this.$http({
          url: '/dashboard/tags/all',
          method: 'GET'
        }).then((response) =>{
          var data = response.data;
          var tag = {};
          for(var i=0; i < data.length; i++){
            tag = {name: data[i].name, id: data[i].id};
            this.tags.push(tag);
          }
        }, (reponse) => {
          // Handle the error
        });
      },
      addTag(){
        if(this.tag){
          this.addTagSlug();
          this.$http({
            url: '/dashboard/tags',
            method: 'POST',
            data: {
              _token: this.token,
              name: this.tag,
              slug: this.tagSlug,
            }
          }).then((data) =>{
            this.tags = [];
            this.getTags();
            this.tag = '';
            this.tagSlug ='';
          }, (reponse) => {
            // Handle the error
          });
        }
      },
      deleteTag(e){
        var id = e.target.id;
        this.$http({
          url: '/dashboard/tags/'+id ,
          method: 'DELETE',
          data: {
            _token: this.token,
          }
        }).then((data) =>{
          this.tags = [];
          this.getTags();
        }, (reponse) => {
          // Handle the error
        });
      },
      createPost(){
        var content = $('#summernote').code();
        var image = $('#image').val();
        var author = $('#author').val();
        this.$http({
          url: '/dashboard/posts',
          method: 'POST',
          data:{
            title: this.title,
            slug: this.slug,
            content: content,
            image: image,
            _token: this.token,
            author: author,
            categories: this.selectedCategories,
            tags: this.selectedTags,
          }
        }).then((data) =>{
          this.clearInputs();
          this.createPostSuccess();
        }, (reponse) => {
          // Handle the error
        });
      },
      createPostSuccess(){
        swal({
          title: "Post Created",
          text: "You created a post.",
          type: "success",
          showCancelButton: true,
          cancelButtonText: 'Return to Posts',
          confirmButtonText: 'Write Another Post'
        }, (isConfirm) => {
          if(isConfirm){
            // Do Nothing
          }else{
            window.location = '/dashboard/posts';
          }
        });
      },
      clearInputs(){
        this.title = '';
        this.slug = '';
        this.category = '';
        this.tag = '',
        this.selectedTags = [],
        this.categories = [];
        this.selectedCategories = [];
        var content = $('#summernote').code('');
        var image = $('#image').val('');
      },
      titleToSlug(){
        if(!this.slug){
          var slug = this.title.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
          this.slug = slug;
        }
      },
      slugToSlug(){
        this.slug = this.slug.toLowerCase().trim().replace(/ /g, '-').replace(/[^\w-]+/g, '');
      },
      addTagSlug(){
        this.tagSlug = this.tag.toLowerCase().trim().replace(/ /g, '-').replace(/[^\w-]+/g, '');
      },
      addCategorySlug(){
        this.categorySlug = this.tag.toLowerCase().trim().replace(/ /g, '-').replace(/[^\w-]+/g, '');
      },
    },
    computed:{
      categoryEmpty(){
        if(!this.category){
          return true;
        }
        return false;
      },
      tagEmpty(){
        if(!this.tag){
          return true;
        }
        return false;
      }
    }
  });
}

if(document.getElementById('tagManagement')){
  var addTagForm = new Vue({
    el: '#tagManagement',
    data:{
      id: '',
      name: '',
      slug: '',
      token: '',
      tags: [],
      editMode: false,

    },
    ready(){
      this.initTable();
    },
    methods:{
      initTable(){
        var tagsTable = $("#tags-table").dataTable({
          dom:
            "<'row am-datatable-header'<'col-sm-6'l><'col-sm-6'f>>" +
            "<'row am-datatable-body'<'col-sm-12'tr>>" +
            "<'row am-datatable-footer'<'col-sm-5'i><'col-sm-7'p>>",
          "language": {
            "zeroRecords": "There are no tags."
          },
        });
      },
      createTag(){
        var tag = {name: this.name, slug: this.slug};
        this.tags.push(tag);
        console.log(this.slug, this.name);
        this.$http({
          url: '/dashboard/tags',
          method: 'POST',
          data:{
            name: this.name,
            slug: this.slug,
            _token: this.token,
          }
        }).then((data) =>{
          console.log(data.request);
          swal({
            title: "Success!",
            text: this.name+' Successfully Added.',
            type: "success",
            showCancelButton: false,
            confirmButtonText: 'Close'
          }, (isConfirm) => {
            if(isConfirm){
              this.exitAlertReload();
            }
          });
        }, (reponse) => {
          // Handle the error
        });
      },
      getTags(){
        this.$http({
          url: '/dashboard/tags/allTags',
          method: 'GET',
          data:{

          }
        }).then((data) =>{
          console.log(data.length)
        }, (reponse) => {
          // Handle the error
        });
      },
      nameToSlug(){
        if(!this.slug){
          var slug = this.name.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
          this.slug = slug;
        }
      },
      slugToSlug(){
        this.slug = this.slug.toLowerCase().trim().replace(/ /g, '-').replace(/[^\w-]+/g, '');
      },
      deleteTag(tag){
        this.$http({
          url: '/dashboard/tags/'+ tag,
          method: 'DELETE',
          data:{
            _token: this.token,
          }
        }).then((data) =>{
          this.exitAlertReload();
        }, (reponse) => {
          swal({
            title: "Error",
            text: response,
            type: "error",
            showCancelButton: false,
            confirmButtonText: 'Okay'
          });
        });
      },
      confirmDeleteTag(e){
        var tag = e.target.id;
        swal({
          title: "Are you sure?",
          text: "You are about to delete this tag. Please Confirm.",
          type: "warning",
          showCancelButton: true,
          cancelButtonText: 'Cancel',
          confirmButtonText: 'Delete Tag'
        }, (isConfirm) => {
          if(isConfirm){
            this.deleteTag(tag);
          }else{

          }
        });
      },
      editTag(e){
        this.editMode = true;
        this.$http({
          url: '/dashboard/tags/'+e.target.id,
          method: 'GET',
          data:{

          }
        }).then((data) =>{
          this.id = data.data.id;
          this.name = data.data.name;
          this.slug = data.data.slug;
        }, (reponse) => {
          // Handle the error
        });
      },
      cancelEdit(){
        this.editMode = false;
        this.id = '';
        this.name= '';
        this.slug = '';
      },
      updateTag(){
        this.$http({
          url: '/dashboard/tags/'+this.id,
          method: 'PUT',
          data:{
            name: this.name,
            slug: this.slug,
            _token: this.token,
          }
        }).then((data) =>{
          swal({
            title: "Success!",
            text: this.name+' Successfully Updated',
            type: "success",
            showCancelButton: false,
            confirmButtonText: 'Close'
          }, (isConfirm) => {
            if(isConfirm){
              this.exitAlertReload();
            }
          });
        }, (reponse) => {
          // Handle the error
        });
      },
      exitAlertReload(){
        swal.close();
        setTimeout(() => {
          window.location.reload();
        }, 250);
      },
    },
  });
}

if(document.getElementById('categoryManagement')){
  var addCategoryForm = new Vue({
    el: '#categoryManagement',
    data:{
      id: '',
      name: '',
      slug: '',
      token: '',
      parent: '0',
      description:'',
      categories: [],
      editMode: false,

    },
    ready(){
      this.initTable();
      this.getCategories();
    },
    methods:{
      initTable(){
        var categoriesTable = $("#categories-table").dataTable({
          dom:
            "<'row am-datatable-header'<'col-sm-6'l><'col-sm-6'f>>" +
            "<'row am-datatable-body'<'col-sm-12'tr>>" +
            "<'row am-datatable-footer'<'col-sm-5'i><'col-sm-7'p>>",
          "language": {
            "zeroRecords": "There are no categories."
          },
        });
      },
      createCategory(){
        var category = {name: this.name, slug: this.slug};
        this.categories.push(category);
        this.$http({
          url: '/dashboard/categories',
          method: 'POST',
          data:{
            name: this.name,
            slug: this.slug,
            description: this.description,
            parent: this.parent,
            _token: this.token,
          }
        }).then((data) =>{
          swal({
            title: "Success!",
            text: this.name+' Successfully Added.',
            type: "success",
            showCancelButton: false,
            confirmButtonText: 'Close'
          }, (isConfirm) => {
            if(isConfirm){
              this.exitAlertReload();
            }
          });
        }, (reponse) => {
          // Handle the error
        });
      },
      getCategories(){
        this.$http({
          url: '/dashboard/categories/all',
          method: 'GET',
        }).then((data) =>{
          var cats = data.data;
          for(var i=0; i < cats.length; i++ ){
            var category = {
              id: cats[i].id,
              name: cats[i].name,
            };
            this.categories.push(category);
          }
        }, (reponse) => {
          // Handle the error
        });
      },
      nameToSlug(){
        if(!this.slug){
          var slug = this.name.toLowerCase().replace(/ /g, '-').replace(/[^\w-]+/g, '');
          this.slug = slug;
        }
      },
      slugToSlug(){
        this.slug = this.slug.toLowerCase().trim().replace(/ /g, '-').replace(/[^\w-]+/g, '');
      },
      deleteCategory(category){
        this.$http({
          url: '/dashboard/categories/'+ category,
          method: 'DELETE',
          data:{
            _token: this.token,
          }
        }).then((data) =>{
          this.exitAlertReload();
        }, (reponse) => {
          swal({
            title: "Error",
            text: response,
            type: "error",
            showCancelButton: false,
            confirmButtonText: 'Okay'
          });
        });
      },
      confirmDeleteCategory(e){
        var category = e.target.id;
        swal({
          title: "Are you sure?",
          text: "You are about to delete this category. Please Confirm.",
          type: "warning",
          showCancelButton: true,
          cancelButtonText: 'Cancel',
          confirmButtonText: 'Delete Category'
        }, (isConfirm) => {
          if(isConfirm){
            this.deleteTag(category);
          }else{

          }
        });
      },
      editCategory(e){
        console.log(e.target.id)
        this.editMode = true;
        this.$http({
          url: '/dashboard/categories/'+e.target.id,
          method: 'GET',
          data:{

          }
        }).then((data) =>{
          this.id = data.data.id;
          this.name = data.data.name;
          this.description = data.data.description;
          this.parent = data.data.parent;
          this.slug = data.data.slug;
        }, (reponse) => {
          // Handle the error
        });
      },
      cancelEdit(){
        this.editMode = false;
        this.id = '';
        this.name= '';
        this.slug = '';
        this.parent = 0;
        this.description = '';
      },
      updateCategory(){
        this.$http({
          url: '/dashboard/categories/'+this.id,
          method: 'PUT',
          data:{
            name: this.name,
            slug: this.slug,
            parent: this.parent,
            description: this.description,
            _token: this.token,
          }
        }).then((data) =>{
          swal({
            title: "Success!",
            text: this.name+' Successfully Updated',
            type: "success",
            showCancelButton: false,
            confirmButtonText: 'Close'
          }, (isConfirm) => {
            if(isConfirm){
              this.exitAlertReload();
            }
          });
        }, (reponse) => {
          // Handle the error
        });
      },
      exitAlertReload(){
        swal.close();
        setTimeout(() => {
          window.location.reload();
        }, 250);
      },
    },
  });
}
