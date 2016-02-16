<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/img/favicon.png">
    <title>Amaretti</title>
    <link rel="stylesheet" type="text/css" href="/lib/stroke-7/style.css"/>
    <link rel="stylesheet" type="text/css" href="/lib/jquery.nanoscroller/css/nanoscroller.css"/><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/css/dashboard.css" type="text/css"/>
  </head>
  <body class="am-splash-screen">
    <div class="am-wrapper am-login">
      <div class="am-content">
        <div class="main-content">
          <div class="login-container">
            <div class="panel panel-default">
              <div class="panel-heading"><img src="/images/logo.png" alt="logo" width="250px" class="logo-img"></div>
              <div class="panel-body">
                @yield('content')
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="/lib/jquery.nanoscroller/javascripts/jquery.nanoscroller.min.js" type="text/javascript"></script>
    <script src="/js/dashboard.js" type="text/javascript"></script>
    <script src="/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      });

    </script>
  </body>
</html>
