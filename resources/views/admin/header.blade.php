<header class="navbar navbar-fixed">
   <div class="navbar--header"> <a class="logo" href="index.html"> <img alt="" src="images/logo.png"> </a> <a title="Toggle Sidebar" class="navbar--btn" href="#" data-toggle="sidebar"> <i class="fa fa-bars"></i> </a> </div>
   <a title="Toggle Sidebar" class="navbar--btn" href="#" data-toggle="sidebar"> <i class="fa fa-bars"></i> </a> 
   <div class="navbar--search">
      <form action="search-results.html"> <input name="search" class="form-control" required="" type="search" placeholder="Search Something..."> <button class="btn-link"><i class="fa fa-search"></i></button> </form>
   </div>
   <div class="navbar--nav ml-auto">
      <ul class="nav">
         <li class="nav-item"> <a class="nav-link" href="#"> <i class="fa fa-bell"></i> <span class="badge text-white bg-blue">7</span> </a> </li>
         <li class="nav-item"> <a class="nav-link" href="mailbox_inbox.html"> <i class="fa fa-envelope"></i> <span class="badge text-white bg-blue">4</span> </a> </li>
         <li class="nav-item dropdown nav-language">
            <a class="nav-link" href="#" data-toggle="dropdown"> <img alt="" src="assets/img/flags/us.png"> <span>English</span> <i class="fa fa-angle-down"></i> </a> 
            <ul class="dropdown-menu">
               <li> <a href=""> <img alt="" src="assets/img/flags/de.png"> <span>German</span> </a> </li>
               <li> <a href=""> <img alt="" src="assets/img/flags/fr.png"> <span>French</span> </a> </li>
               <li> <a href=""> <img alt="" src="assets/img/flags/us.png"> <span>English</span> </a> </li>
            </ul>
         </li>
         <li class="nav-item dropdown nav--user online">
            <a class="nav-link" href="#" data-toggle="dropdown"> <img class="rounded-circle" alt="" src="images/01_80x80.png"> <span>Henry Foster</span> <i class="fa fa-angle-down"></i> </a> 
            <ul class="dropdown-menu">
               <li><a href="profile.html"><i class="far fa-user"></i>Profile</a></li>
               <li><a href="mailbox_inbox.html"><i class="far fa-envelope"></i>Inbox</a></li>
               <li><a href="#"><i class="fa fa-cog"></i>Settings</a></li>
               <li class="dropdown-divider"></li>
               <li><a href="lock-screen.html"><i class="fa fa-lock"></i>Lock Screen</a></li>
               <li><a href="{{route('logout')}}"><i class="fa fa-power-off"></i>Logout</a></li>
            </ul>
         </li>
      </ul>
   </div>
</header>