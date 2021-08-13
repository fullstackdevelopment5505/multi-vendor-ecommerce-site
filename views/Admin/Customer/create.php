<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>User Table</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/app-assets/vendors/css/vendors.min.css';?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css';?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/app-assets/vendors/css/forms/icheck/icheck.css';?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/app-assets/vendors/css/forms/icheck/custom.css';?>">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/app-assets/css/bootstrap.css';?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/app-assets/css/bootstrap-extended.css';?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/app-assets/css/colors.css';?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/app-assets/css/components.css';?>">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/app-assets/css/core/menu/menu-types/vertical-menu-modern.css';?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/app-assets/css/core/colors/palette-gradient.css';?>">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/style.css';?>">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body ng-app="myFrontend" ng-controller = 'homeController'  ng-init="flag=false"  class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-lg-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="<?php echo base_url().'index.php/admin';?>">
                        <!-- <img class="brand-logo" alt="modern admin logo" src="<?php echo base_url().'assets/app-assets/images/logo/logo.png';?>"> -->
                            <h3 class="brand-text">Admin Panel</h3>
                        </a></li>
                    <li class="nav-item d-none d-lg-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i></a></li>
                    <li class="nav-item d-lg-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="mr-1 user-name text-bold-700">Admin</span><span class="avatar avatar-online"><img src="<?php echo base_url().'assets/app-assets/images/portrait/small/download.jpg';?>" alt="avatar"><i></i></span></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="<?=base_url()?>index.php/admin/edit" class="dropdown-item"><i class="ft-user"></i> Edit Profile</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="<?php echo base_url().'index.php/admin/signout';?>"><i class="ft-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->

    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                
                <li class=" navigation-header"><span data-i18n="nav.category.ecommerce">Ecommerce</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="Ecommerce"></i>
                </li>
                <li class=" nav-item"><a href="#"><i class="la la-clipboard"></i><span class="menu-title" data-i18n="nav.invoice.main">Category</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="<?php echo base_url().'index.php/admin/category';?>"><i></i><span data-i18n="nav.invoice.invoice_summary">Categories</span></a>
                        </li>
                        <li><a class="menu-item" href="<?php echo base_url().'index.php/admin/subcategory';?>"><i></i><span data-i18n="nav.invoice.invoice_template">Sub Category</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="<?php echo base_url().'index.php/admin/register';?>"><i class="la la-th-large"></i><span class="menu-title" data-i18n="">Register</span></a>
                </li>
                <li class=" nav-item"><a href="<?php echo base_url().'index.php/admin/product';?>"><i class="la la-shopping-cart"></i><span class="menu-title" data-i18n="">Product</span></a>
                </li>
                <!-- <li class=" nav-item"><a href="<?php echo base_url().'index.php/admin/pending';?>"><i class="la la-credit-card"></i><span class="menu-title" data-i18n="">Pending</span></a>
                </li> -->
                <!--<li class=" nav-item"><a href="<?php echo base_url().'index.php/admin/order';?>"><i class="la la-check-circle-o"></i><span class="menu-title" data-i18n="">Order</span></a>
                </li>-->
                <li class=" navigation-header"><span data-i18n="nav.category.ui">User Manage</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="User Interface"></i>
                </li>
                <!-- <li class="nav-item"><a href="<?php echo base_url().'index.php/admin/user';?>"><i class="la la-th-large"></i><span class="menu-title" data-i18n="">User</span></a>
                </li> -->
                <li class="nav-item"><a href="<?php echo base_url().'index.php/admin/customer';?>"><i class="la la-user"></i><span class="menu-title" data-i18n="">Customer </span></a>
                </li>
                <!-- <li class="nav-item">
                        <a href="<?php echo base_url().'index.php/admin/chat';?>"><i class="ft-message-square"></i> Chats</a>
                        </li> -->
            </ul>
        </div>
    </div>

    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row mb-1">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Customer Table</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url().'index.php/admin';?>">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Customer Table
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <section class="row">
                    <div class="col-12">
                    <div class="card" style="height: 961.5px;">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form">Create Customer</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <p>You can add personal information!</p>
                                        </div>
                                        <form method="post" action="<?php echo base_url().'index.php/admin/customer/save';?>">
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-user"></i>     Customer Info</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">Name</label>
                                                            <input type="text" id="projectinput1" class="form-control" placeholder="First Name" name="fname" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput3">E-mail</label>
                                                            <input type="text" id="projectinput3" class="form-control" placeholder="E-mail" name="email"  required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput5">Gender</label>
                                                            <select id="projectinput5" name="gender" required class="form-control">
                                                                <option value="none" selected="" disabled="">Gender</option>
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput6">Position</label>
                                                            <input type="text" id="projectinput6" class="form-control" placeholder="Position..." name="position"  required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput6">Company</label>
                                                            <input type="text" id="projectinput6" class="form-control" placeholder="Company Name" name="company"  required>
                                                        </div>
                                                    </div>
                                                 </div>   <div class="form-group">
                                                        <label for="companyName">Password</label>
                                                        <input type="password" id="companyName" class="form-control" placeholder="Password" name="password" required>
                                                    </div>
                                            </div>
                                            <div class="form-actions">
                                                <a href="<?php echo base_url().'index.php/admin/customer';?>" class="btn btn-warning mr-1">
                                                    <i class="ft-x"></i> Cancel
                                                </a>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> Save
                                                </button>
                                            </div>
                                        </form>
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
    <footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2019 </span></p>
</footer>
    <!-- END: Footer-->

    <script src="<?php echo base_url().'assets/js/angular.js';?>"></script>

    <!-- BEGIN: Vendor JS-->
    <script src="<?php echo base_url().'assets/app-assets/vendors/js/vendors.min.js';?>"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo base_url().'assets/app-assets/vendors/js/tables/jquery.dataTables.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/app-assets/vendors/js/forms/icheck/icheck.min.js';?>"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?php echo base_url().'assets/app-assets/js/core/app-menu.js';?>"></script>
    <script src="<?php echo base_url().'assets/app-assets/js/core/app.js';?>"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url().'assets/app-assets/js/scripts/pages/invoices-list1.js';?>"></script>
    <!-- END: Page JS-->
    <script>
    var App = angular.module('myFrontend',[]);
    App.controller('homeController', function($scope, $http){
    });
</script>

</body>
<!-- END: Body-->

</html>