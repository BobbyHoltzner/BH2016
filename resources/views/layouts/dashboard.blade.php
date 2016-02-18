
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/images/bh-favicon.png">
    <title>Amaretti</title>
    <link rel="stylesheet" type="text/css" href="/lib/stroke-7/style.css"/>
    <link rel="stylesheet" type="text/css" href="/lib/summernote/summernote.css"/>
    <link rel="stylesheet" type="text/css" href="/lib/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="/lib/jquery.nanoscroller/css/nanoscroller.css"/><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/css/dashboard.css" type="text/css"/>
  </head>
  <body>
    <div class="am-wrapper am-fixed-sidebar">
      @include('layouts.dashboard.topNav')
      @include('layouts.dashboard.mainNav')
      <div class="am-content">
        <div class="page-head">
          <h2>@yield('title')</h2>
        </div>
        <div class="main-content">
          @yield('content')
        </div>
      </div>
      @include('layouts.dashboard.sidebar')
    </div>
    <script src="/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="/lib/jquery.nanoscroller/javascripts/jquery.nanoscroller.min.js" type="text/javascript"></script>
    <script src="/js/dashboard.js" type="text/javascript"></script>
    <script src="/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/lib/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="/lib/datatables/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
    <script src="/lib/datatables/plugins/buttons/js/dataTables.buttons.js" type="text/javascript"></script>
    <script src="/lib/datatables/plugins/buttons/js/buttons.html5.js" type="text/javascript"></script>
    <script src="/lib/datatables/plugins/buttons/js/buttons.flash.js" type="text/javascript"></script>
    <script src="/lib/datatables/plugins/buttons/js/buttons.print.js" type="text/javascript"></script>
    <script src="/lib/datatables/plugins/buttons/js/buttons.colVis.js" type="text/javascript"></script>
    <script src="/lib/datatables/plugins/buttons/js/buttons.bootstrap.js" type="text/javascript"></script>
    <script src="/js/app-tables-datatables.js" type="text/javascript"></script>
    <script src="/lib/summernote/summernote.min.js" type="text/javascript"></script>
    <script src="/lib/summernote/summernote-ext-amaretti.js" type="text/javascript"></script>
    <script src="/js/dropzone.js" charset="utf-8"></script>
    <script src="/js/app-form-wysiwyg.js" type="text/javascript"></script>
    <script src="/js/app.js" charset="utf-8"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
        App.dataTables();
        App.textEditors();
      });

    </script>
  </body>
</html>
