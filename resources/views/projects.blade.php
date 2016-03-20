@extends('layouts.internal')
@section('content')
<img src="/images/portfolio-header.png" />
<h1>Latest Work</h1>
<p>Here are some of the projects I have worked on recently:</p>
<ul class="portfolio">
  <li>
    <div class="img-container">
      <img src="/images/winedesign.jpg" />
    </div>
    <div class="overlay" style="display:none">
      <a href="http://wineanddesign.com" class="btn btn-primary">View Site</a>
    </div>
  </li>
  <li>
    <div class="img-container">
      <img src="/images/jerrylewisroofing.jpg" />
    </div>
    <div class="overlay" style="display:none;">
      <a href="http://jerrylewisroofing.com" class="btn btn-primary">View Site</a>
    </div>
  </li>
  <li>
    <div class="img-container">
      <img src="/images/rex.jpg" />
    </div>
    <div class="overlay" style="display:none">
      <a href="http://therexmd.net" class="btn btn-primary">View Site</a>
    </div>
  </li>
  <li>
    <div class="img-container">
      <img src="/images/bumblejunk.jpg" />
    </div>
    <div class="overlay" style="display:none">
      <a href="http://bumblejunk.com" class="btn btn-primary">View Site</a>
    </div>
  </li>
</ul>
<h3>Current software projects under development:</h3>
<div class="software-row">
  <img src="/images/dragtuner-logo.png" />
  <div class="description">
    <p>
      Dragtuner is a multi platform logbook, analytics application for drag racers. It will feature a web application, desktop application, as well as mobile applications for both Android and iOS.
      The technologies being used for this project are: Laravel/Lumen, ReactJS, React Native, and Electron.
    </p>
  </div>
</div>
<div class="software-row">
  <img src="/images/jolt-logo.png" />
  <div class="description">
    <p>
      Jolt is an analytics dashboard for businesses and bloggers featuring and easy to use user interface and a feature rich user experience. It leverages popular social media APIs as well as Google Analytics for the website and event tracking.
      The technologies being used for this project are Laravel and ReactJS.
    </p>
  </div>
</div>
@endsection
