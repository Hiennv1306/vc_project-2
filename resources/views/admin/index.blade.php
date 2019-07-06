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
         <aside class="sidebar ps ps--active-y" data-trigger="scrollbar">
            <div class="sidebar--profile">
               <div class="profile--img"> <a href="profile.html"> <img class="rounded-circle" alt="" src="images/01_80x80.png"> </a> </div>
               <div class="profile--name"> <a class="btn-link" href="profile.html">Henry Foster</a> </div>
               <div class="profile--nav">
                  <ul class="nav">
                     <li class="nav-item"> <a title="User Profile" class="nav-link" href="profile.html"> <i class="fa fa-user"></i> </a> </li>
                     <li class="nav-item"> <a title="Lock Screen" class="nav-link" href="lock-screen.html"> <i class="fa fa-lock"></i> </a> </li>
                     <li class="nav-item"> <a title="Messages" class="nav-link" href="mailbox_inbox.html"> <i class="fa fa-envelope"></i> </a> </li>
                     <li class="nav-item"> <a title="Logout" class="nav-link" href="#"> <i class="fa fa-sign-out-alt"></i> </a> </li>
                  </ul>
               </div>
            </div>
            <div class="sidebar--nav">
               <ul>
                  <li>
                     <ul>
                        <li class="active"> <a href="index.html"> <i class="fa fa-home"></i> <span>Dashboard</span> </a> </li>
                        <li class="is-dropdown">
                           <a href="#"> <i class="fa fa-shopping-cart"></i> <span>Ecommerce</span> </a> 
                           <ul>
                              <li><a href="ecommerce.html">Dashboard</a></li>
                              <li><a href="products.html">Products</a></li>
                              <li><a href="products-edit.html">Edit Products</a></li>
                              <li><a href="orders.html">Orders</a></li>
                              <li><a href="order-view.html">Order View</a></li>
                           </ul>
                        </li>
                     </ul>
                  </li>
                  <li class="is-dropdown">
                     <a href="#">Layouts</a> 
                     <ul>
                        <li class="is-dropdown">
                           <a href="#"> <i class="fa fa-th"></i> <span>Page Layouts</span> </a> 
                           <ul>
                              <li><a href="blank.html">Blank Page</a></li>
                              <li><a href="page-light.html">Page Light</a></li>
                              <li><a href="sidebar-light.html">Sidebar Light</a></li>
                           </ul>
                        </li>
                        <li class="is-dropdown">
                           <a href="#"> <i class="fa fa-th-list"></i> <span>Footers</span> </a> 
                           <ul>
                              <li><a href="footer-light.html">Footer Light</a></li>
                              <li><a href="footer-dark.html">Footer Dark</a></li>
                              <li><a href="footer-transparent.html">Footer Transparent</a></li>
                           </ul>
                        </li>
                     </ul>
                  </li>
                  <li class="is-dropdown">
                     <a href="#">Components</a> 
                     <ul>
                        <li class="is-dropdown">
                           <a href="#"> <i class="far fa-newspaper"></i> <span>UI Elements</span> </a> 
                           <ul>
                              <li><a href="buttons.html">Buttons</a></li>
                              <li><a href="pagination.html">Pagination</a></li>
                              <li><a href="progress-bars.html">Progress Bars</a></li>
                              <li><a href="tabs-accordions.html">Tabs &amp; Accordions</a></li>
                              <li><a href="modals.html">Modals</a></li>
                              <li><a href="ui-slider.html">UI Slider</a></li>
                              <li><a href="sweet-alerts.html">Sweet Alerts</a></li>
                              <li><a href="timeline.html">Timeline</a></li>
                           </ul>
                        </li>
                        <li class="is-dropdown">
                           <a href="#"> <i class="fab fa-wpforms"></i> <span>Form</span> </a> 
                           <ul>
                              <li><a href="form-elements.html">Form Elements</a></li>
                              <li><a href="form-wizard.html">Form Wizard</a></li>
                              <li><a href="dropzone.html">Dropzone</a></li>
                           </ul>
                        </li>
                     </ul>
                  </li>
                  <li class="is-dropdown">
                     <a href="#">Apps and Charts</a> 
                     <ul>
                        <li class="is-dropdown">
                           <a href="#"> <i class="far fa-envelope"></i> <span>Mailbox</span> </a> 
                           <ul>
                              <li><a href="mailbox_inbox.html">Inbox</a></li>
                              <li><a href="mailbox_compose.html">Compose</a></li>
                           </ul>
                        </li>
                        <li> <a href="calendar.html"> <i class="far fa-calendar-alt"></i> <span>Calendar</span> </a> </li>
                        <li> <a href="chat.html"> <i class="far fa-comments"></i> <span>Chat</span> </a> </li>
                        <li> <a href="contacts.html"> <i class="far fa-address-book"></i> <span>Contacts</span> </a> </li>
                        <li> <a href="notes.html"> <i class="far fa-sticky-note"></i> <span>Notes</span> </a> </li>
                        <li> <a href="todo-list.html"> <i class="fa fa-tasks"></i> <span>Todo List</span> </a> </li>
                        <li> <a href="search-results.html"> <i class="fa fa-search"></i> <span>Search Results</span> </a> </li>
                     </ul>
                  </li>
                  <li class="is-dropdown">
                     <a href="#">Extra</a> 
                     <ul>
                        <li class="is-dropdown">
                           <a href="#"> <i class="fa fa-file"></i> <span>Extra Pages</span> </a> 
                           <ul>
                              <li><a href="pricing-tables.html">Pricing Tables</a></li>
                              <li><a href="profile.html">Profile</a></li>
                              <li><a href="invoice.html">Invoice</a></li>
                              <li><a href="login.html">Login</a></li>
                              <li><a href="register.html">Register</a></li>
                              <li><a href="forgot-password.html">Forgot Password</a></li>
                              <li><a href="lock-screen.html">Lock Screen</a></li>
                              <li><a href="404.html">404 Error</a></li>
                              <li><a href="500.html">500 Error</a></li>
                              <li><a href="maintenance.html">Maintenance</a></li>
                              <li><a href="coming-soon.html">Coming Soon</a></li>
                           </ul>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
            
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
               <div tabindex="0" class="ps__thumb-x" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; height: 877px; right: 0px;">
               <div tabindex="0" class="ps__thumb-y" style="top: 0px; height: 455px;"></div>
            </div>
         </aside>
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