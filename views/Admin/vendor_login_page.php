<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Vendor Login Page</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/app-assets/vendors/css/vendors.min.css';?>">
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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/app-assets/css/pages/login-register.css';?>">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/style.css';?>">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body ng-app="myFrontend" ng-controller = 'homeController'  ng-init="flag=false" class="vertical-layout vertical-menu-modern 1-column  blank-page" data-open="click" data-menu="vertical-menu-modern" style="background-color:#17171c!important;"data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row mb-1">
            </div>
            <div class="content-body">
                <section class="flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                                <div class="card-header border-0">
                                    <div class="card-title text-center">
                                        <!-- <img src="<?php echo base_url().'assets/app-assets/images/logo/logo-dark.png';?>" alt="branding logo"> -->
                                        <h1>Vendor Panel</h1>
                                    </div>
                                    <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>vendor details</span></h6>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form-horizontal">
                                            <div ng-if="flag"class="alert alert-danger mb-2" role="alert">
                                                <strong>Alert:</strong> {{ngAlert}}
                                            </div>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="text" class="form-control" name="user_name" id="user-name" placeholder="Your Username" required>
                                                <div class="form-control-position">
                                                    <i class="ft-user"></i>
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="password" class="form-control" name="user_pass" id="user-password" placeholder="Enter Password" required>
                                                <div class="form-control-position">
                                                    <i class="la la-key"></i>
                                                </div>
                                            </fieldset>
                                            <div class="form-group row">
                                                <div class="col-sm-6 col-12 text-center text-sm-left pr-0">
                                                    <fieldset>
                                                        <input type="checkbox" name="user_check" id="remember-me" class="chk-remember">
                                                        <label for="remember-me"> Remember Me</label>
                                                    </fieldset>
                                                </div>
                                                <div class="col-sm-6 col-12 float-sm-left text-center text-sm-right"><a href="recover-password.html" class="card-link">Reset Password</a></div>
                                            </div>
                                            <button ng-click="loginFunc()" class="btn btn-outline-info btn-block"><i class="ft-unlock"></i> Login</button>
                                        </form>
                                    </div>
                                    <!-- <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>New to Modern ?</span></p> -->
                                    <!-- <div class="card-body">
                                        <a href="register-with-bg-image.html" class="btn btn-outline-danger btn-block"><i class="ft-user"></i> Register</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->
    <script>
        base_url = "<?php echo base_url(); ?>";
    </script>


    <script src="<?php echo base_url().'assets/js/angular.js';?>"></script>

    <script src="<?php echo base_url().'assets/app-assets/vendors/js/vendors.min.js';?>"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo base_url().'assets/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js';?>"></script>
    <script src="<?php echo base_url().'assets/app-assets/vendors/js/forms/icheck/icheck.min.js';?>"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?php echo base_url().'assets/app-assets/js/core/app-menu.js';?>"></script>
    <script src="<?php echo base_url().'assets/app-assets/js/core/app.js';?>"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url().'assets/app-assets/js/scripts/forms/form-login-register.js';?>"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->
<script>
    var App = angular.module('myFrontend',[]);
    App.controller('homeController', function($scope, $http){
        $scope.flag = false; 
        $scope.loginFunc = function(){
            uName = document.getElementById("user-name").value;
            uPass = document.getElementById("user-password").value;
            uCheck = document.getElementById("remember-me").checked;
            // alert(uName);
            if(uName == '' || uPass == ''){
                $scope.flag = true; 
                $scope.ngAlert = "you must input password and name correctly!";
            }else{
                $scope.flag = false;
                data = {
                    userId: uName,
                    password: uPass,
                    check: uCheck
                };
                $http.post(base_url + 'index.php/vendor/check',JSON.stringify(data)).then(function (response){
                    // $scope.pc_state_arr = response.data;
                    // alert(JSON.stringify(response.data));
                    if(response.data == 'true')
                        location.assign(base_url + 'index.php/vendor');
                    else{
                        $scope.flag = true; 
                        $scope.ngAlert = "Username or Password is incorrect";
                    }
                });
            }
        }
    });
</script>
</html>