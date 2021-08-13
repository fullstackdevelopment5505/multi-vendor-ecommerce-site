<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Vendor Dashboard</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/app-assets/vendors/css/vendors.min.css';?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/app-assets/vendors/css/charts/chartist.css';?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/app-assets/vendors/css/charts/chartist-plugin-tooltip.css';?>">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/app-assets/css/bootstrap.css';?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/app-assets/css/bootstrap-extended.css';?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/app-assets/css/colors.css';?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/app-assets/css/components.css';?>">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/app-assets/css/core/menu/menu-types/horizontal-menu.css';?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/app-assets/css/core/colors/palette-gradient.css';?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/app-assets/css/pages/dashboard-bank.css';?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/app-assets/css/plugins/calendars/clndr.css';?>">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/style.css';?>">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu 2-columns  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow navbar-static-top navbar-light navbar-brand-center">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item"><a class="navbar-brand" href="<?php echo base_url().'index.php/vendor';?>">
                            <h3 class="brand-text">Vendor Panel</h3>
                        </a></li>
                    <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                    
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="mr-1 user-name text-bold-700">John Doe</span><span class="avatar avatar-online"><img src="<?php echo base_url().'assets/app-assets/images/portrait/small/avatar-s-19.png';?>" alt="avatar"><i></i></span></a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="user-profile.html"><i class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="app-email.html"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="user-cards.html"><i class="ft-check-square"></i> Task</a><a class="dropdown-item" href="app-chat.html"><i class="ft-message-square"></i> Chats</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="login-with-bg-image.html"><i class="ft-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->

    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-dark navbar-without-dd-arrow navbar-shadow" role="navigation" data-menu="menu-wrapper">
        <div class="navbar-container main-menu-content" data-menu="menu-container">
            <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                <!-- <li class="nav-item active"><a class="nav-link" href="<?php echo base_url().'index.php/vendor';?>"><i class="la la-bank"></i><span>Vendor Dashboard</span></a></li> -->
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="la la-edit"></i><span data-i18n="nav.accounts.main">Pending</span><span class="badge badge badge-pill badge-success float-right mt-0">9</span></a>
                    <ul class="dropdown-menu">
                        <li data-menu=""><a class="dropdown-item" href="<?php echo base_url().'index.php/vendor/pending';?>" data-toggle=""><span>All Results</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="<?php echo base_url().'index.php/vendor/pending/create';?>" data-toggle=""><span>Add New</span></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'index.php/vendor/register';?>"><i class="la la-credit-card"></i><span>Register</span></a></li>
            </ul>
        </div>
    </div>

    <!-- END: Main Menu-->
 <!-- BEGIN: Content--> 
 <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row mb-1">
            </div>
            <div class="content-body">
                <!-- Bank Stats -->
                <section id="bank-cards" class="bank-cards">
                    <div class="row match-height">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="card bank-card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-5 text-left">
                                                <h3 class="mb-0">$1.2K</h3>
                                                <p class="text-light">per Ounce</p>
                                                <h4 class="warning mt-1 text-bold-500">Gold</h4>
                                            </div>
                                            <div class="col-7">
                                                <div class="float-right">
                                                    <canvas id="gold-chart" class="height-75"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="card bank-card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-5 text-left">
                                                <h3 class="mb-0">$14.66</h3>
                                                <p class="text-light">per Ounce</p>
                                                <h4 class="info mt-1 text-bold-500">Silver</h4>
                                            </div>
                                            <div class="col-7">
                                                <div class="float-right">
                                                    <canvas id="silver-chart" class="height-75"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="card bank-card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-5 text-left">
                                                <h3 class="mb-0">$0.88</h3>
                                                <p class="text-light">per Unit</p>
                                                <h4 class="danger mt-1 text-bold-500">USD</h4>
                                            </div>
                                            <div class="col-7">
                                                <div class="float-right">
                                                    <canvas id="euro-chart" class="height-75"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="card bank-card pull-up">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-5 text-left">
                                                <h3 class="mb-0">$6.5K</h3>
                                                <p class="text-light">per unit</p>
                                                <h4 class="success mt-1 text-bold-500">EURO</h4>
                                            </div>
                                            <div class="col-7">
                                                <div class="float-right">
                                                    <canvas id="bitcoin-chart" class="height-75"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-9 col-lg-8 col-md-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card card-shadow">
                                        <div class="card-header card-header-transparent">
                                            <h4 class="card-title">Transaction Reports</h4>
                                            <ul class="nav nav-pills nav-pills-rounded chart-action float-right btn-group" role="group">
                                                <li class="nav-item">
                                                    <a class="active nav-link" data-toggle="tab" href="#scoreLineToDay">Day</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#scoreLineToWeek">Week</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#scoreLineToMonth">Month</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="widget-content tab-content bg-white p-20">
                                            <div class="ct-chart tab-pane active scoreLineShadow" id="scoreLineToDay"></div>
                                            <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToWeek"></div>
                                            <div class="ct-chart tab-pane scoreLineShadow" id="scoreLineToMonth"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-12">
                            <div class="chart-stats text-center my-3">
                                <div class="card bg-gradient-directional-primary">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                                <div class="media-body text-white text-left">
                                                    <h3 class="text-white">$15,320</h3>
                                                    <span>Transaction</span>
                                                </div>
                                                <div class="percentage">
                                                    <span>63%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card bg-gradient-directional-warning">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                                <div class="media-body text-white text-left">
                                                    <h3 class="text-white">156</h3>
                                                    <span>New Clients</span>
                                                </div>
                                                <div class="percentage">
                                                    <span>54%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card bg-gradient-directional-cyan">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                                <div class="media-body text-white text-left">
                                                    <h3 class="text-white">278</h3>
                                                    <span>New Projects</span>
                                                </div>
                                                <div class="percentage">
                                                    <span>71%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-xl-5 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Calendar</h4>
                                </div>
                                <div class="card-content">
                                    <div id="bank-calendar" class="overflow-hidden bg-grey bg-lighten-3"></div>
                                </div>
                            </div>
                            <div id="clndr" class="clearfix">
                                <script type="text/template" id="bank-calendar-template">
                                    <div class="clndr-controls">
                   <div class="clndr-previous-button">&lt;</div>
                   <div class="clndr-next-button">&gt;</div>
                   <div class="current-month">
                       <%= month %>
                       <%= year %>
                   </div>

               </div>
               <div class="clndr-grid">
                   <div class="days-of-the-week clearfix">
                       <% _.each(daysOfTheWeek, function(day) { %>
                           <div class="header-day">
                               <%= day %>
                           </div>
                       <% }); %>
                   </div>
                   <div class="days">
                       <% _.each(days, function(day) { %>
                           <div class="<%= day.classes %>" id="<%= day.id %>"><span class="day-number"><%= day.day %></span></div>
                       <% }); %>
                   </div>
               </div>
               <div class="event-listing">
                   <div class="event-listing-title">Event this month</div>
                   <% _.each(eventsThisMonth, function(event) { %>
                       <div class="event-item font-small-3">
                           <div class="event-item-day font-small-2">
                               <%= event.date %>
                           </div>
                           <div class="event-item-name text-bold-600">
                               <%= event.title %>
                           </div>
                           <div class="event-item-location">
                               <%= event.location %>
                           </div>
                       </div>
                   <% }); %>
               </div>
            </script>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-12">
                            <div class="card recent-loan">
                                <div class="card-header">
                                    <h4 class="text-center">Loan Applications</h4>
                                </div>
                                <div class="card-content">
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="border-top-0"></th>
                                                    <th class="border-top-0">Loan Amount</th>
                                                    <th class="border-top-0">Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="avatar avatar-sm">
                                                            <img class="rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-4.png" alt="Avatar" />
                                                        </div>
                                                    </td>
                                                    <td class="text-truncate">
                                                        <i class="ft-arrow-down-left success"></i> $20000
                                                        <div class="font-small-2 text-light"><i class="font-small-2 ft-map-pin"></i> S.G.road,UK</div>
                                                    </td>
                                                    <td class="text-truncate">4:59p.m</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar avatar-sm">
                                                            <img class="rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-1.png" alt="Avatar" />
                                                        </div>
                                                    </td>
                                                    <td class="text-truncate">
                                                        <i class="ft-arrow-up-right danger"></i> $500
                                                        <div class="font-small-2 text-light"><i class="font-small-2 ft-map-pin"></i> P.stone,UK</div>
                                                    </td>
                                                    <td class="text-truncate">2:01p.m</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar avatar-sm">
                                                            <img class="rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-10.png" alt="Avatar" />
                                                        </div>
                                                    </td>
                                                    <td class="text-truncate">
                                                        <i class="ft-arrow-down-left success"></i> $10000
                                                        <div class="font-small-2 text-light">
                                                            <i class="font-small-2 ft-map-pin"></i> Grod Street,UK
                                                        </div>
                                                    </td>
                                                    <td class="text-truncate">12:50p.m</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar avatar-sm">
                                                            <img class="rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-9.png" alt="Avatar" />
                                                        </div>
                                                    </td>
                                                    <td class="text-truncate">
                                                        <i class="ft-arrow-up-right danger"></i> $2000
                                                        <div class="font-small-2 text-light"><i class="font-small-2 ft-map-pin"></i> Malbourn,UK</div>
                                                    </td>
                                                    <td class="text-truncate">9:45a.m</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="avatar avatar-sm">
                                                            <img class="rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-12.png" alt="Avatar" />
                                                        </div>
                                                    </td>
                                                    <td class="text-truncate">
                                                        <i class="ft-arrow-up-right danger"></i> $1000
                                                        <div class="font-small-2 text-light">
                                                            <i class="font-small-2 ft-map-pin"></i> Scott Lane,UK
                                                        </div>
                                                    </td>
                                                    <td class="text-truncate">8:22a.m</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row match-height">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="card add-card">
                                <div class="card-header">
                                    <h4>Add Card</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-12 mb-3">
                                                <div class="card-wrapper"></div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12">
                                                <form action="#" class="card-form">
                                                    <fieldset class="mb-1">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control card-number" name="number" id="card-number" maxlength="19" placeholder="Card Number" />
                                                        </div>
                                                    </fieldset>
                                                    <fieldset class="mb-1">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control card-name" name="name" id="card-name" placeholder="Card Holder Name" />
                                                        </div>
                                                    </fieldset>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <fieldset class="mb-1">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control card-expiry" name="expiry" id="card-expiry" placeholder="Card Expiry Date" />
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <fieldset class="mb-1">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control card-cvc" name="cvc" id="card-cvc" maxlength="16" placeholder="Card CVC Number" />
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <input type="button" name="generate" value="Generate" class="btn round btn-primary box-shadow-1 px-3 mr-1" />
                                                            <input type="button" name="cancel" value="Cancel" class="btn btn-secondary round box-shadow-1 px-3" />
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light navbar-shadow">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2019 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT</a></span><span class="float-md-right d-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i><span id="scroll-top"></span></span></p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?php echo base_url().'assets/app-assets/vendors/js/vendors.min.js';?>"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo base_url().'assets/app-assets/vendors/js/ui/jquery.sticky.js';?>"></script>
    <script src="<?php echo base_url().'assets/app-assets/vendors/js/charts/jquery.sparkline.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/app-assets/vendors/js/charts/chart.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/app-assets/vendors/js/charts/chartist.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/app-assets/vendors/js/forms/extended/card/jquery.card.js';?>"></script>
    <script src="<?php echo base_url().'assets/app-assets/vendors/js/extensions/moment.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/app-assets/vendors/js/extensions/underscore-min.js';?>"></script>
    <script src="<?php echo base_url().'assets/app-assets/vendors/js/extensions/clndr.min.js';?>"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?php echo base_url().'assets/app-assets/js/core/app-menu.js';?>"></script>
    <script src="<?php echo base_url().'assets/app-assets/js/core/app.js';?>"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url().'assets/app-assets/js/scripts/ui/breadcrumbs-with-stats.js';?>"></script>
    <script src="<?php echo base_url().'assets/app-assets/js/scripts/pages/dashboard-bank.js';?>"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>