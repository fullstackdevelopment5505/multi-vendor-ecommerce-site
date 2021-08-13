<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Vendor Dashboard</title>
    <link rel="apple-touch-icon" href="<?php echo base_url().'assets/app-assets/images/ico/apple-icon-120.png';?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url().'assets/app-assets/images/ico/favicon.ico';?>">
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
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="mr-1 user-name text-bold-700"><?php echo $sName;?></span><span class="avatar avatar-online"><img src="<?php echo base_url().'assets/app-assets/images/portrait/small/'.$sImg;?>" alt="avatar"><i></i></span></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="<?php echo base_url().'index.php/vendor/edit';?>"><i class="ft-user"></i> Edit Profile</a>
                                <a class="dropdown-item" href="<?php echo base_url().'index.php/vendor/signout';?>"><i class="ft-power"></i> Logout</a>
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
                <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="la la-edit"></i><span data-i18n="nav.accounts.main">Pending</span></a>
                    <ul class="dropdown-menu">
                        <li data-menu=""><a class="dropdown-item" href="<?php echo base_url().'index.php/vendor/pending';?>" data-toggle=""><span>All Results</span></a>
                        </li>
                        <li data-menu=""><a class="dropdown-item" href="<?php echo base_url().'index.php/vendor/pending/create';?>" data-toggle=""><span>Add New</span></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'index.php/vendor/register';?>"><i class="la la-credit-card"></i><span>Register</span></a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'index.php/vendor/chat';?>"><i class="la ft-message-square"></i><span> Chats</span></a></li>
            </ul>
        </div>
    </div>

    <!-- END: Main Menu-->
 <!-- BEGIN: Content--> 
 <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row mb-1">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title">New Product</h3>
                </div>
            </div>
            <div class="content-body">
                <!-- Form wizard with number tabs section start -->
                <section id="add-card">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">
                                        Add New Product
                                    </h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form method="post" action="<?php echo base_url().'index.php/vendor/pending/save';?>" enctype='multipart/form-data'>
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-shopping-cart"></i>Product Info</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">Product Name</label>
                                                            <input type="text" id="projectinput1" class="form-control" placeholder="input content...." name="fname" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">SubCategory</label>
                                                            <select id="projectinput5" name="sId" required class="form-control" >
                                                                <option value="" selected="" disabled="">SubCategory</option>
                                                                <?php 
                                                                    foreach($subcategory_list as $subcategory){
                                                                        echo '<option value="'.$subcategory->subcategoryId.'">'.$subcategory->subcategoryName.'</option>';
                                                                    }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>                     
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1">Product Count</label>
                                                            <input type="number" id="projectinput1" class="form-control" min="1"value="1" placeholder="input content...." name="count" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1">Product Price</label>
                                                            <input type="number" id="projectinput1" step="0.01"class="form-control"  min="0.01" value="1.00"placeholder="input content...." name="price" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1">Product Date</label>
                                                            <input type="date" id="projectinput1" class="form-control" placeholder="input content...." name="date" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1">Product Gender(Optional)</label>
                                                            <select id="projectinput5" name="gender"  class="form-control" >
                                                                <option value="" selected="" disabled="">Gender</option>
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1">Product Size(Optional)</label>
                                                            <input type="text" placeholder="ex: 15 inch(TV) / XL Clothing " class="form-control"name="size">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="projectinput1">Product Color(Optional)</label>
                                                            <select id="projectinput5" name="color" class="form-control" >
                                                                <option value="" selected="" disabled="">Color</option>
                                                                <option value="red">Red</option>
                                                                <option value="blue">Blue</option>
                                                                <option value="green">Green</option>
                                                                <option value="white">White</option>
                                                                <option value="black">Black</option>
                                                                <option value="gray">Gray</option>
                                                                <option value="brown">Brown</option>
                                                                <option value="yellow">Yellow</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Select File</label>
                                                    <label id="projectinput7" class="file center-block">
                                                        <input type='file' name='files[]' multiple="">
                                                        <span class="file-custom"></span>
                                                    </label>
                                                </div>
                                                <div class="form-group">
                                                    <label for="projectinput8">Product Summary</label>
                                                    <textarea id="projectinput8" rows="5" class="form-control" name="content" placeholder="about Product"></textarea>
                                                </div>
                                            </div>
                                              <div class="text-right">
                                                <div>
                                                    <input type="submit" value="Submit" class="btn btn-success mr-1">
                                                    <input type="reset" value="Cancel" class="btn btn-danger">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- <div class="card-footer  -->
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
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2019 </span></p>
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