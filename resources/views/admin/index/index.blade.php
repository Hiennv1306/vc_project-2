@extends('admin.index')
@section('title', 'List User')
@section('content')
   <main class="main--container">
      <section class="page--header">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-6">
                  <h2 class="page--title h5">Dashboard</h2>
                  <ul class="breadcrumb">
                     <li class="breadcrumb-item active"><span>Dashboard</span></li>
                  </ul>
               </div>
               <div class="col-lg-6">
                  <div class="summary--widget">
                     <div class="summary--item">
                        <p class="summary--chart" data-trigger="sparkline" data-color="#009378" data-height="38" data-width="5" data-type="bar">
                           <canvas width="71" height="38" style="width: 71px; height: 38px; vertical-align: top; display: inline-block;"></canvas>
                        </p>
                        <p class="summary--title">This Month</p>
                        <p class="summary--stats text-green">2,371,527</p>
                     </div>
                     <div class="summary--item">
                        <p class="summary--chart" data-trigger="sparkline" data-color="#e16123" data-height="38" data-width="5" data-type="bar">
                           <canvas width="71" height="38" style="width: 71px; height: 38px; vertical-align: top; display: inline-block;"></canvas>
                        </p>
                        <p class="summary--title">Last Month</p>
                        <p class="summary--stats text-orange">2,527,371</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="main--content">
         <div class="row gutter-20">
            <div class="col-md-4">
               <div class="panel">
                  <div class="miniStats--panel">
                     <div class="miniStats--header bg-darker">
                        <p class="miniStats--chart" data-trigger="sparkline" data-color="#2bb3c0" data-height="30" data-width="4" data-type="bar">
                           <canvas width="109" height="30" style="width: 109px; height: 30px; vertical-align: top; display: inline-block;"></canvas>
                        </p>
                        <p class="miniStats--label text-white bg-blue"> <i class="fa fa-level-up-alt"></i> <span>10%</span> </p>
                     </div>
                     <div class="miniStats--body">
                        <i class="miniStats--icon fa fa-user text-blue"></i> 
                        <p class="miniStats--caption text-blue">Monthly</p>
                        <h3 class="miniStats--title h4">New Users</h3>
                        <p class="miniStats--num text-blue">13,450</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="panel">
                  <div class="miniStats--panel">
                     <div class="miniStats--header bg-darker">
                        <p class="miniStats--chart" data-trigger="sparkline" data-color="#e16123" data-height="30" data-width="4" data-type="bar">
                           <canvas width="109" height="30" style="width: 109px; height: 30px; vertical-align: top; display: inline-block;"></canvas>
                        </p>
                        <p class="miniStats--label text-white bg-orange"> <i class="fa fa-level-down-alt"></i> <span>10%</span> </p>
                     </div>
                     <div class="miniStats--body">
                        <i class="miniStats--icon fa fa-ticket-alt text-orange"></i> 
                        <p class="miniStats--caption text-orange">Monthly</p>
                        <h3 class="miniStats--title h4">Tickets Answered</h3>
                        <p class="miniStats--num text-orange">450</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="panel">
                  <div class="miniStats--panel">
                     <div class="miniStats--header bg-darker">
                        <p class="miniStats--chart" data-trigger="sparkline" data-color="#009378" data-height="30" data-width="4" data-type="bar">
                           <canvas width="109" height="30" style="width: 109px; height: 30px; vertical-align: top; display: inline-block;"></canvas>
                        </p>
                        <p class="miniStats--label text-white bg-green"> <i class="fa fa-level-up-alt"></i> <span>10%</span> </p>
                     </div>
                     <div class="miniStats--body">
                        <i class="miniStats--icon fa fa-rocket text-green"></i> 
                        <p class="miniStats--caption text-green">Monthly</p>
                        <h3 class="miniStats--title h4">Projects Launched</h3>
                        <p class="miniStats--num text-green">3,130,300</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-8 col-md-6">
               <div class="panel">
                  <div class="panel-heading">
                     <h3 class="panel-title">Yearly Earning Graph Overview</h3>
                     <div class="dropdown">
                        <button class="btn-link dropdown-toggle" type="button" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i> </button> 
                        <ul class="dropdown-menu">
                           <li><a href="#"><i class="fa fa-sync"></i>Update Data</a></li>
                           <li><a href="#"><i class="fa fa-cogs"></i>Settings</a></li>
                           <li><a href="#"><i class="fa fa-times"></i>Remove Panel</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="panel-chart">
                     <div class="chart--body area--chart style--1" id="morrisAreaChart01" style="position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        
                        <div class="morris-hover morris-default-style" style="left: 400.3px; top: 51px; display: none;">
                           <div class="morris-hover-row-label">May</div>
                           <div class="morris-hover-point" style="color: #e16123">
                              Order:
                              $2,000
                           </div>
                           <div class="morris-hover-point" style="color: #ff4040">
                              Shipment:
                              $2,000
                           </div>
                           <div class="morris-hover-point" style="color: #2bb3c0">
                              Tax:
                              $1,500
                           </div>
                           <div class="morris-hover-point" style="color: #009378">
                              Revenue:
                              $1,500
                           </div>
                        </div>
                     </div>
                     <div class="chart--stats style--1">
                        <ul class="nav">
                           <li data-overlay="1 orange">
                              <p class="amount">$10,320,340</p>
                              <p> <span class="label">Order</span> <span class="text-red"><i class="fa fa-long-arrow-alt-down"></i>2.25%</span> </p>
                           </li>
                           <li data-overlay="1 red">
                              <p class="amount">$235,090</p>
                              <p> <span class="label">Shipment</span> <span class="text-green"><i class="fa fa-long-arrow-alt-up"></i>2.25%</span> </p>
                           </li>
                           <li data-overlay="1 blue">
                              <p class="amount">$134,900</p>
                              <p> <span class="label">Tax</span> <span class="text-red"><i class="fa fa-long-arrow-alt-down"></i>2.25%</span> </p>
                           </li>
                           <li data-overlay="1 green">
                              <p class="amount">$1,340</p>
                              <p> <span class="label">Revenue</span> <span class="text-green"><i class="fa fa-long-arrow-alt-up"></i>2.25%</span> </p>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-md-6">
               <div class="panel">
                  <div class="panel-heading">
                     <h3 class="panel-title">Market Trends</h3>
                     <div class="dropdown">
                        <button class="btn-link dropdown-toggle" type="button" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i> </button> 
                        <ul class="dropdown-menu">
                           <li><a href="#">This Week</a></li>
                           <li><a href="#">Last Week</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="panel-chart">
                     <div class="chart--body area--chart style--1" id="morrisAreaChart02" style="position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                        
                        <div class="morris-hover morris-default-style" style="left: 0px; top: 91px; display: none;">
                           <div class="morris-hover-row-label">20</div>
                           <div class="morris-hover-point" style="color: #ff4040">
                              Total Debt:
                              $0
                           </div>
                           <div class="morris-hover-point" style="color: #2bb3c0">
                              Total Equity:
                              $50
                           </div>
                        </div>
                     </div>
                     <div class="chart--stats style--2">
                        <ul class="nav">
                           <li>
                              <p class="amount">$56,700</p>
                              <p data-overlay="1 blue"><span class="label">TOTAL EQUITY</span></p>
                           </li>
                           <li>
                              <p class="amount">$4,000</p>
                              <p data-overlay="1 red"><span class="label">TOTAL DEBT</span></p>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-md-6">
               <div class="panel">
                  <div class="panel-heading">
                     <h3 class="panel-title">Overall Rating</h3>
                     <div class="dropdown">
                        <button class="btn-link dropdown-toggle" type="button" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i> </button> 
                        <ul class="dropdown-menu">
                           <li><a href="#"><i class="fa fa-sync"></i>Update Data</a></li>
                           <li><a href="#"><i class="fa fa-cogs"></i>Settings</a></li>
                           <li><a href="#"><i class="fa fa-times"></i>Remove Panel</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="panel-chart">
                     <div class="chart--body line--chart style--4" data-trigger="sparklineChart01">
                        <canvas width="158" height="100" style="width: 158.5px; height: 100px; vertical-align: top; display: inline-block;"></canvas>
                     </div>
                     <div class="chart--stats style--4">
                        <ul class="nav">
                           <li> <span class="text">The product is awesome</span> <span class="stat">20%</span> </li>
                           <li> <span class="text">I am so pleased</span> <span class="stat">40%</span> </li>
                           <li> <span class="text">The product is really good</span> <span class="stat">20%</span> </li>
                           <li> <span class="text">The product is awesome</span> <span class="stat">60%</span> </li>
                           <li> <span class="text">I am so surprised</span> <span class="stat">20%</span> </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-md-6">
               <div class="panel">
                  <div class="weather--panel text-white bg-blue">
                     <div class="weather--title"> <i class="fa fa-map-marker-alt"></i> <span>Dhaka, Bangladesh</span> </div>
                     <div class="weather--info"> <i class="wi wi-rain-wind"></i> <span>33°C</span> </div>
                  </div>
               </div>
               <div class="panel">
                  <div class="weather--panel text-white bg-orange">
                     <div class="weather--title"> <i class="fa fa-map-marker-alt"></i> <span>Melbourne, Autoria</span> </div>
                     <div class="weather--info"> <i class="wi wi-hot"></i> <span>35°C</span> </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-6">
               <div class="panel">
                  <div class="profile--panel">
                     <div class="img-wrapper bg--img" style='background-image: url("assets/img/covers/01_800x150.jpg");'>
                        <div class="img online"> <img class="rounded-circle" alt="" src="assets/img/avatars/01_150x150.png"> </div>
                     </div>
                     <div class="name">
                        <h3 class="h3">Henry Foster</h3>
                     </div>
                     <div class="role">
                        <p>Web Developer &amp; Graphic Designer</p>
                     </div>
                     <div class="action"> <a class="btn btn-info" href="#">+ Follow</a> </div>
                     <div class="bio">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo ratione vitae aliquid aliquam provident nostrum itaque quam minima molestias.</p>
                     </div>
                     <ul class="info nav text-uppercase">
                        <li> <strong>1125</strong> <span>Items</span> </li>
                        <li> <strong>133</strong> <span>Projects</span> </li>
                        <li> <strong>3025</strong> <span>Followers</span> </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <footer class="main--footer main--footer-light">
         <p>Copyright © <a href="#">DAdmin</a>. All Rights Reserved.</p>
      </footer>
   </main>
@endsection
