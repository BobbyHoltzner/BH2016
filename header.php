<?php
  // Main Header File for the blog
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php // TODO Echo out the title here ?></title>
    <meta name="description" content="<?php // TODO echo out the description ?>">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300,300italic,400italic,700italic,500italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/css/main.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" media="screen" title="no title" charset="utf-8">
  </head>
  <body>
    <header>
      <div id="infoBar">
        <div class="wrapper">
          <div id="social">
            <a href="#"><span class="ion-social-facebook"></span></a>
            <a href="#"><span class="ion-social-twitter"></span></a>
            <a href="#"><span class="ion-social-googleplus"></span></a>
            <a href="#"><span class="ion-social-github"></span></a>
          </div>
          <div id="contactInfo">

          </div>
        </div>
      </div>
      <nav>
        <div class="wrapper">
          <div id="logoContainer">
            <a href="#"><img width="250" src="images/logo.png" alt=""></a>
          </div>
          <ul class="navigation">
            <li class="top-level"><a class="dropdown-toggle top" href="#">Services <span class="ion-ios7-arrow-down dropdown-icon"></span></a>
              <ul class="dropdown" style="display:none;">
                <li><a href="#">Web Development</a></li>
                <li><a href="#">Mobile App Development</a></li>
                <li><a href="#">Custom Software Development</a></li>
                <li><a href="#">CMS Development</a></li>
                <li><a href="#">E-Commerce Development </a></li>
                <li><a href="#">Search Engine Optimization</a></li>
              </ul>
            </li>
            <li class="top-level"><a class="top" href="#">Work</a></li>
            <li class="top-level"><a class="top" href="#">About</a></li>
            <li class="top-level"><a class="top" href="#">Blog</a></li>
            <li class="top-level"><a class="top" href="#">Contact</a></li>
          </ul>
        </div>
      </nav>
    </header>
