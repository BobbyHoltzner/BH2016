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
    this.createPostSuccess();
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
})
