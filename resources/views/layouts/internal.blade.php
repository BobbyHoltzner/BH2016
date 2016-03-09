<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="<?php // TODO echo out the description ?>">
    <link rel="shortcut icon" href="/images/bh-favicon.png">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300,300italic,400italic,700italic,500italic' rel='stylesheet' type='text/css'>
    <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/frontend/css/main.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <header>
      <nav>
        <div class="wrapper">
          <div id="logoContainer">
            <a href="#"><img width="200" src="images/logo.png" alt=""></a>
          </div>
          <ul class="navigation">
            <li class="top-level"><a class="top" href="#">About</a></li>
            <li class="top-level"><a class="top" href="#">Blog</a></li>
            <li class="top-level"><a class="top" href="#">Projects</a></li>
            <li class="top-level"><a class="top" href="#">Contact</a></li>
          </ul>
          <div class="social">
            <a href="#"><span class="ion-social-facebook"></span></a>
            <a href="#"><span class="ion-social-twitter"></span></a>
            <a href="#"><span class="ion-social-googleplus"></span></a>
            <a href="#"><span class="ion-social-github"></span></a>
            <a href="#"><span class="ion-social-instagram"></span></a>
          </div>
        </div>
      </nav>
    </header>
    <div class="wrapper" id="main">
      @yield('content')
      @include('sidebar')
    </div>

    <footer>
      <div class="wrapper">
        <div class="copyright">
          <p>
            &copy; <?php echo date('Y') ?> Bobby Holtzner. All Rights Reserved.
          </p>
        </div>
        <div class="social">
          <a href="#"><span class="ion-social-facebook"></span></a>
          <a href="#"><span class="ion-social-twitter"></span></a>
          <a href="#"><span class="ion-social-googleplus"></span></a>
          <a href="#"><span class="ion-social-github"></span></a>
          <a href="#"><span class="ion-social-instagram"></span></a>
        </div>
      </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="/frontend/js/libs.js" charset="utf-8"></script>
    <script src="/frontend/js/main.js" charset="utf-8"></script>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=540253416116004";
      fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
    </script>
  </body>
</html>
