$(document).ready(function($){
  // Dropdown Menu
  $('a.dropdown-toggle').hover(function(){
    $(this).toggleClass('active');
    $(this).siblings('ul.dropdown').show();
  }, function(){
    $(this).siblings('ul.dropdown').hide();
    $(this).toggleClass('active');
  });
  $('ul.dropdown').hover(function(){
    $(this).siblings('a.dropdown-toggle').toggleClass('active');
  }, function(){
    $(this).siblings('a.dropdown-toggle').toggleClass('active');
  });

  // Add Typed.js to Header
  $(function(){
      $(".typed").typed({
        strings: ["a <b>developer.</b>", "a <b>consultant.</b>", "an <b>entrepreneur.</b>"],
        typeSpeed: 100,
        contentType: 'html',
        loop: true,
      });
  });
});

//# sourceMappingURL=main.js.map
