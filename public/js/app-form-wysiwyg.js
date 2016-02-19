var App = (function () {
	'use strict';

  App.textEditors = function( ){

    //Summernote
    $('#summernote').summernote({
      height: 300
    });

  };

  return App;
})(App || {});
