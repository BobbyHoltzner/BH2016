var App = (function () {
	'use strict';

  App.textEditors = function( ){

    //Summernote
    $('#editor').summernote({
      height: 300
    });

  };

  return App;
})(App || {});
