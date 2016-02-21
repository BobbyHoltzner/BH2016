import Vue from 'vue';
Vue.use(require('vue-resource'));

$("div#dropzone2").dropzone({ url: "/file/post" });


var CreatePostForm = new Vue({
  el: '#createPost',
  data: {
    title: '',
    slug: '',
    category: '',
    categories:[],
    selectedCategories: [],
    token: '',
    featured_image: '',
  },
  ready(){
    this.getCategories();
  },
  methods: {
    getCategories(){
      this.$http({ url: '/dashboard/categories', method: 'GET'}).then((response) =>{
        var data = response.data;
        var category = {};
        for(var i=0; i < data.length; i++){
          category = {name: data[i].name, id: data[i].id};
          this.categories.push(category);
        }
      }, (reponse) => {
        // Handle the error
      });
    },
    addCategory(){
      if(this.category){
        this.$http({
          url: '/dashboard/categories',
          method: 'POST',
          data: {
            _token: this.token,
            name: this.category,
          }
        }).then((data) =>{
          this.categories = [];
          this.getCategories();
          this.category = '';
        }, (reponse) => {
          console.log(response);
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
    }
  },
  computed:{
    categoryEmpty(){
      if(!this.category){
        return true;
      }
      return false;
    }
  }
});
var table = $("#tags-table").dataTable({
  dom:
    "<'row am-datatable-header'<'col-sm-6'l><'col-sm-6'f>>" +
    "<'row am-datatable-body'<'col-sm-12'tr>>" +
    "<'row am-datatable-footer'<'col-sm-5'i><'col-sm-7'p>>",
  "language": {
    "zeroRecords": "There are no tags."
  },
});

var addTagForm = new Vue({
  el: '#addTag',
  data:{
    name: '',
    slug: '',
    token: '',
    tags: [],

  },
  ready(){
    this.initTable();
  },
  methods:{
    initTable(){

    },
    createTag(){
      var tag = {name: this.name};
      this.tags.push(tag);
      // this.$http({
      //   url: '/dashboard/tags',
      //   method: 'POST',
      //   data:{
      //     name: this.name,
      //     slug: this.slug,
      //     _token: this.token,
      //   }
      // }).then((data) =>{
      //   this.getTags();
      //   this.name = '';
      //   this.slug = '';
      //   table.destroy();
      //   this.initTable();
      // }, (reponse) => {
      //   // Handle the error
      // });
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
    }
  },
});
