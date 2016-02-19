import Vue from 'vue';
import VueResource from 'vue-resource';

var CreatePostForm = new Vue({
  el: '#createPost',
  data: {
    title: '',
    slug: '',
    category: '',
    categories:[],
  },
  methods: {
    submit(e){
      var note = $('#summernote').code();
      console.log(note);
    },
    addCategory(){
      this.categories.push({category: this.category});
      this.category = '';
    },
  },
})
