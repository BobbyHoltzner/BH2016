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

  // Portfolio hover
  $('ul.portfolio li').hover(function(){
    $(this).find('div.overlay, div.overlay .btn').fadeIn('slow');
  }, function(){
    $(this).find('div.overlay, div.overlay .btn').fadeOut('slow');
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

// Add Smooth Scroll to anchor links
  $(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });

var emailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if(document.getElementById('contactForm')){
    new Vue({
      el: '#contactForm',
      data:{
        name: '',
        email: '',
        message: '',
        responseObject:{
          error: false,
          success: false,
          message: '',
        },
        loading: false,
      },
      methods:{
        collect: function(event){
          event.preventDefault();
          this.loading = true;
          this.validate();
        },
        validate: function(){
          this.validateFields();
        },
        validateFields: function(){
          if(!this.name || !this.email || !this.message){
            this.responseObject = {
              error: true,
              message: 'All fields are required.'
            }
          }else{
            this.responseObject={
            error: false,
            message: '',
            }
            this.validateEmail();
          }
        },
        validateEmail: function(){
          if(this.email && this.email.match(emailFormat)){
            this.responseObject = {
            error: false,
            message: '',
            }
          this.validateCaptcha();
        }else{
            this.responseObject.error = true;
            this.responseObject.message = "Sorry, this email address is invalid."
          }
        },
        validateCaptcha: function(){
          var gRecaptchaResponse = document.getElementById('g-recaptcha-response').value;
          var _token = document.getElementById('_token').value;
          this.$http({
            url: '/verifyCaptcha',
            method: 'POST',
            data:{
              gRecaptchaResponse: gRecaptchaResponse,
              _token: _token,
            }
          }).then((data) =>{
            if(data.data.success == true){
              this.sendMessage();
            }
            else{
              this.responseObject = {
              error: false,
              message: "I don't accept messages from robots.",
              }
            }
          }, (reponse) => {
            // Handle the Error
          });
        },
        sendMessage: function(){
          var _token = document.getElementById('_token').value;
          this.$http({
            url: '/formSubmission',
            method: 'POST',
            data:{
              _token: _token,
              name: this.name,
              email: this.email,
              message: this.message,
            },
          }).then((data) => {
            this.showSuccess();
          }, (response) => {
            // Handle the error
          });
        },
        showSuccess: function(){
          this.responseObject = {
            message: 'Your message has been sent, I will get back to you shortly!',
            success: true,
            error: false,
          };
          this.loading = false;
        },
      },
    });
  }
});
