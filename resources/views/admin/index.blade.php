<html class="no-outlines" lang="en" dir="ltr">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Admin Area :: @yield('title')</title>
      <meta name="author" content="">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <link href="favicon.png" rel="icon" type="image/png">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CMontserrat:400,500" rel="stylesheet">
      <link href="{{URL::asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{URL::asset('admin/css/fontawesome-all.min.css')}}" rel="stylesheet">
      <link href="{{URL::asset('admin/css/jquery-ui.min.css')}}" rel="stylesheet">
      <link href="{{URL::asset('admin/css/perfect-scrollbar.min.css')}}" rel="stylesheet">
      <link href="{{URL::asset('admin/css/morris.min.css')}}" rel="stylesheet">
      <link href="{{URL::asset('admin/css/select2.min.css')}}" rel="stylesheet">
      <link href="{{URL::asset('admin/css/jquery-jvectormap.min.css')}}" rel="stylesheet">
      <link href="{{URL::asset('admin/css/horizontal-timeline.min.css')}}" rel="stylesheet">
      <link href="{{URL::asset('admin/css/weather-icons.min.css')}}" rel="stylesheet">
      <link href="{{URL::asset('admin/css/dropzone.min.css')}}" rel="stylesheet">
      <link href="{{URL::asset('admin/css/ion.rangeSlider.min.css')}}" rel="stylesheet">
      <link href="{{URL::asset('admin/css/ion.rangeSlider.skinFlat.min.css')}}" rel="stylesheet">
      <!-- <link href="{{URL::asset('admin/css/datatables.min.css')}}" rel="stylesheet"> -->
      <link href="{{URL::asset('admin/css/fullcalendar.min.css')}}" rel="stylesheet">
      <link href="{{URL::asset('admin/css/style.css')}}" rel="stylesheet">
      <script src="{{URL::asset('admin/js/jquery.min.js')}}"></script> 
      <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style>
   </head>
   <body>
      <div class="wrapper">
         @include('admin.header')
         
         @yield('content')
      </div>
    
      <script src="{{URL::asset('admin/js/jquery-ui.min.js')}}"></script> 
      <script src="{{URL::asset('admin/js/bootstrap.bundle.min.js')}}"></script> 
      <script src="{{URL::asset('admin/js/perfect-scrollbar.min.js')}}"></script> 
      <script src="{{URL::asset('admin/js/jquery.sparkline.min.js')}}"></script> 
      <script src="{{URL::asset('admin/js/raphael.min.js')}}"></script> 
      <script src="{{URL::asset('admin/js/morris.min.js')}}"></script> 
      <script src="{{URL::asset('admin/js/select2.min.js')}}"></script> 
      <script src="{{URL::asset('admin/js/jquery-jvectormap-world-mill.min.js')}}"></script> 
      <script src="{{URL::asset('admin/js/horizontal-timeline.min.js')}}"></script> 
      <!-- <script src="{{URL::asset('admin/js/jquery.validate.min.js')}}"></script>  -->
      <script src="{{URL::asset('admin/js/jquery.steps.min.js')}}"></script> 
      <script src="{{URL::asset('admin/js/dropzone.min.js')}}"></script> 
      <script src="{{URL::asset('admin/js/ion.rangeSlider.min.js')}}"></script> 
      <!-- <script src="{{URL::asset('admin/js/datatables.min.js')}}"></script> --> 
      <script src="{{URL::asset('admin/js/main.js')}}"></script> 
      <div class="jvectormap-tip" style="left: 1454px; top: 931px; display: none;">United States</div>
   </body>
</html>