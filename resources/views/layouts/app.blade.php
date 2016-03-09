<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php // TODO Echo out the title here ?></title>
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
            <li class="top-level"><a class="top" href="#about">About</a></li>
            <li class="top-level"><a class="top" href="/blog">Blog</a></li>
            <li class="top-level"><a class="top" href="/projects">Projects</a></li>
            <li class="top-level"><a class="top" href="/contact">Contact</a></li>
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

    @yield('content')

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
  </body>
</html>
