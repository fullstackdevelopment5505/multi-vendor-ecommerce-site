<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Product Table</title>
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
                <li class="active nav-item"><a href="<?php echo base_url().'index.php/admin/pending';?>"><i class="la la-credit-card"></i><span class="menu-title" data-i18n="">Pending</span></a>
                </li>
                <!--<li class=" nav-item"><a href="<?php echo base_url().'index.php/admin/order';?>"><i class="la la-check-circle-o"></i><span class="menu-title" data-i18n="">Order</span></a>
                </li>-->
                <li class=" navigation-header"><span data-i18n="nav.category.ui">User Manage</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="User Interface"></i>
                </li>
                <li class="nav-item"><a href="<?php echo base_url().'index.php/admin/user';?>"><i class="la la-th-large"></i><span class="menu-title" data-i18n="">User</span></a>
                </li>
                <li class="nav-item"><a href="<?php echo base_url().'index.php/admin/customer';?>"><i class="la la-user"></i><span class="menu-title" data-i18n="">Customer </span></a>
                </li>
                <li class="nav-item">
                        <a href="<?php echo base_url().'index.php/admin/chat';?>"><i class="ft-message-square"></i> Chats</a>
                        </li>
            </ul>
        </div>
    </div>

    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row mb-1">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Pending Table</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo base_url().'index.php/admin';?>">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Pending Table
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <section class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-head">
                                <div class="card-header">
                                    <h4 class="card-title">Pending</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-h font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <!-- <a class="btn btn-primary btn-sm" href="<?php echo base_url().'index.php/admin/product/create';?>"><i class="ft-plus white"></i> Create Product</a> -->
                                                                      
                                        <!-- <button ng-click="editBtn()"class="btn btn-success btn-sm"><i class="la la-pencil-square white"></i></button>
                                        <button ng-click="deleteBtn()"class="btn btn-danger btn-sm"><i class="la la-bitbucket white"></i></button> -->
                                    </div>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <!-- Invoices List table -->

                                    <div ng-if="flag"class="alert alert-danger mb-2" role="alert">
                                                <strong>Alert:</strong> {{ngAlert}}
                                    </div>
                                    <div class="table-responsive">
                                        <table id="invoices-list" class="table table-white-space table-bordered row-grouping display no-wrap icheck table-middle">
                                            <thead>
                                               <tr>
                                                    <th><input type="checkbox" class="check1input-chk-all"></th>
                                                    <th>No</th>
                                                    <th>Vendor</th>
                                                    <th>Photo</th>
                                                    <th>Product Name</th>
                                                    <th>Count</th>
                                                    <th>Price</th>
                                                    <th>Color</th>
                                                    <th>Date</th>
                                                    <th>Content</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $index = 0; foreach($pending_list as $pending){ $index ++; ?>
                                                <tr>
                                                    
                                                    <td><input type="checkbox" class="input-chk" name="checkName" value="<?=$pending->pendingId;?>"></td>
                                                    <td><?php echo $index;?></td>
                                                    <td class="text-truncate">
                                                        <span class="avatar avatar-xs">
                                                            <img class="box-shadow-2" src="<?php echo base_url().'assets/app-assets/images/portrait/small/'.$pending->userImg;?>" alt="avatar">
                                                        </span>
                                                        <span><?=$pending->userName;?></span>
                                                    </td>
                                                    <td>
                                                        <div class="product-img d-flex align-items-center">
                                                            <img class="img-fluid" style="width:130px;"src="<?php echo base_url().'assets/app-assets/images/product/'.$pending->pendingMainImg;?>" >
                                                        </div>
                                                    </td>
                                                    
                                                    <td><?=$pending->pendingName;?></td>
                                                    <td><?=$pending->pendingCount;?></td>
                                                    <td><?=$pending->pendingPrice;?>$</td>
                                                    <td><?=$pending->pendingColor;?></td>
                                                    <td><?=$pending->pendingDate;?></td>
                                                    <td><?=$pending->pendingContent;?></td>
                                                    <td>
                                                        <button ng-click="approveBtn('<?=$pending->pendingId?>')"class="btn btn-success btn-sm">Approve</button>
                                                        <button ng-click="rejectBtn('<?=$pending->pendingId?>')"class="btn btn-danger btn-sm">Reject</button>
                                                    </td>
                                                    <td>
                                                        <span class="dropdown">
                                                            <button id="btnSearchDrop2" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="btn btn-primary dropdown-toggle dropdown-menu-right"><i class="ft-settings"></i></button>
                                                            <span aria-labelledby="btnSearchDrop2" class="dropdown-menu mt-1 dropdown-menu-right">
                                                                <a href="#" class="dropdown-item"><i class="la la-eye"></i> Open Task</a>
                                                                <a href="#" class="dropdown-item"><i class="la la-pencil"></i> Edit Task</a>
                                                                <a href="#" class="dropdown-item"><i class="la la-check"></i> Complete Task</a>
                                                                <a href="#" class="dropdown-item"><i class="ft-upload"></i> Assign to</a>
                                                                <a href="#" class="dropdown-item"><i class="la la-trash"></i> Delete Task</a>
                                                            </span>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <?php } ?>

                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th><input type="checkbox" class="check1input-chk-all"></th>
                                                <th>No</th>
                                                <th>Vendor</th>
                                                <th>Photo</th>
                                                <th>Product Name</th>
                                                <th>Count</th>
                                                <th>Price</th>
                                                <th>Color</th>
                                                <th>Date</th>
                                                <th>Content</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <!--/ Invoices table -->
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
    <script>
        base_url = "<?php echo base_url(); ?>";
    </script>   
    <script src="<?php echo base_url().'assets/js/angular.js';?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery-3.4.1.min.js';?>"></script>


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
    <!-- <script src="<?php echo base_url().'assets/app-assets/js/scripts/pages/invoices-list5.js';?>"></script> -->
    <!-- END: Page JS-->
    <script>
    var App = angular.module('myFrontend',[]);
    App.controller('homeController', function($scope, $http){
        $scope.approveBtn = function(data){
            location.assign(base_url + 'index.php/admin/pending/status/1/' + data);
        }
        $scope.rejectBtn = function(data){
            location.assign(base_url + 'index.php/admin/pending/status/0/' + data);
        }
    });
</script>
<script>
$(document).ready(function() {
    /********************************************
    *        js of Order by the grouping        *
    ********************************************/

    var groupingTable = $('.row-grouping').DataTable({
        responsive: true,
        rowReorder: true,
        "columnDefs": [
            { "visible": false, "targets": 11},
        ],
        // "order": [[ 2, 'desc' ]],
        "displayLength": 25,
        "drawCallback": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;

            api.column(5, {page:'current'} ).data().each( function ( group, i ) {
                if ( last !== group ) {
                    // $(rows).eq( i ).before(
                    //     '<tr class="group"><td colspan="9">'+group+'</td></tr>'
                    // );

                    last = group;
                }
            } );
        }
    } );

    $('.row-grouping tbody').on( 'click', 'tr.group', function () {
        if (typeof table !== 'undefined' && table.order()[0]) {
            var currentOrder = table.order()[0];
            if ( currentOrder[0] === 5 && currentOrder[1] === 'asc' ) {
                table.order( [ 5, 'desc' ] ).draw();
            }
            else {
                table.order( [ 5, 'asc' ] ).draw();
            }
        }
    });
    

    // Checkbox & Radio 1
    $('.icheck input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
    });

    $('#invoices-list').on( 'draw.dt', function () {
        // Checkbox & Radio 1
        $('.icheck input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
        });
    });
    
    //TODO:AJ: Improve check uncheck all func
    var checkAll = $('input.input-chk-all');
    var checkboxes = $('input.input-chk');

    checkAll.on('ifChecked ifUnchecked', function(event) {        
        if (event.type == 'ifChecked') {
            checkboxes.iCheck('check');
        } else {
            checkboxes.iCheck('uncheck');
        }
    });

    checkboxes.on('ifChanged', function(event){
        if(checkboxes.filter(':checked').length == checkboxes.length) {
            checkAll.prop('checked', 'checked');
        } else {
            checkAll.removeProp('checked');
        }
        checkAll.iCheck('update');
    });

});
</script>
</body>
<!-- END: Body-->

</html>