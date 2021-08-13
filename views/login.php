<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>James Site &amp; Marketplace</title><link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url().'assets/frontend/plugins/font-awesome/css/font-awesome.min.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/frontend/fonts/Linearicons/Linearicons/Font/demo-files/demo.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/frontend/plugins/bootstrap4/css/bootstrap.min.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/frontend/plugins/owl-carousel/assets/owl.carousel.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/frontend/plugins/slick/slick/slick.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/frontend/plugins/lightGallery-master/dist/css/lightgallery.min.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/frontend/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/frontend/plugins/jquery-ui/jquery-ui.min.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/frontend/plugins/YTPlayer/dist/css/jquery.mb.YTPlayer.min.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/frontend/plugins/select2/dist/css/select2.min.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/frontend/css/style1.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/frontend/css/autopart1.css';?>">
  </head>
  <body ng-app="myFrontend" ng-controller = 'homeController'  ng-init="flag=false;passflag=false;flagReg=false;flagRegTrue=false" class="layout-2">
  <header class="header header--standard header--autopart" data-sticky="true">
      <div class="row">
        <div class="col-3">
          <div class="header__content-left" >
             <a  href="<?php echo base_url()?>" style="font-size:20px;font-weight:bolder;padding-left:8px;padding-top:10px; width:250px"><img style="padding-left:12px;width:33%"src="<?php echo base_url().'assets/img/Artwork.png'?>" alt="">&nbsp;EXCESS<span style="color:rgb(59,185,116)">YARD</span></a>
             <div class="menu--product-categories">
                  <div class="menu__toggle"><i class="icon-menu"style="padding-top:10px;"></i></div>
                  <div class="menu__content">
                    <ul class="menu--dropdown">
                        <li><a href="<?php echo base_url().'index.php/home/shop'?>">Buyers</a></li>
                        <li><a href="<?php echo base_url().'index.php/home/vendor'?>">Seller</a></li>
                        <li><a href="<?php echo base_url().'index.php/home/cart'?>">Cart</a></li>
                        <li><a href="<?php echo base_url().'index.php/home/about'?>">About Us</a></li>
                        <li><a href="<?php echo base_url().'index.php/home/contact'?>">Contact Us</a></li>
                    </ul>
                  </div>
                </div>
                </div>
        </div>
        <div class="col-9">
            <div class="header__top">
              <div class="row">
                <div class="col-8">
                </div>
                <div class="col-4">
                  <ul class="header__top-links">
                    <li><a href="<?php echo base_url()?>"><i class="icon-home"></i>&nbsp;&nbsp;Home</a></li>
                    <li>
                      <?php if($this->session->has_userdata('customerId')){  ?>
                        <div class="ps-block--user-header">
                        <div class="ps-block__left"><i class="icon-user"></i>&nbsp;<?=$this->session->customerName?></div>
                        <div class="ps-block__right">
                            <a href="<?php echo base_url().'index.php/customer/signout'?>">/ Logout</a>
                        </div>
                      </div>
                      <?php }else{  ?> 
                        <div class="ps-block--user-header">
                          <div class="ps-block__left"><i class="icon-user"></i></div>
                          <div class="ps-block__right">
                              <a href="<?php echo base_url().'index.php/login'?>">Login</a><a href="<?php echo base_url().'index.php/register'?>">Register</a>
                          </div>
                        </div>
                      <?php } ?>
                    </li>
                  </ul>
                </div>
              </div>
           </div>
          <div class="header__content">
            <div class="container">
              <div class="p_header_excess_yard" style="display:none"id="p_header_id">
              <div class="header__content-left ">
                <a  href="<?php echo base_url()?>" style="font-size:18px;font-weight:bolder;padding-right:8px"><img style="width:60px"src="<?php echo base_url().'assets/img/Artwork.png'?>" alt="">&nbsp;EXCESS<span style="color:#5fa30f">YARD</span></a>
                <div class="menu--product-categories">
                  <div class="menu__toggle"><i class="icon-menu"></i></div>
                  <div class="menu__content">
                    <ul class="menu--dropdown">
                        <li><a href="<?php echo base_url().'index.php/home/shop'?>">Buyers</a></li>
                        <li><a href="<?php echo base_url().'index.php/home/vendor'?>">Seller</a></li>
                        <li><a href="<?php echo base_url().'index.php/home/cart'?>">Cart</a></li>
                        <li><a href="<?php echo base_url().'index.php/home/about'?>">About Us</a></li>
                        <li><a href="<?php echo base_url().'index.php/home/contact'?>">Contact Us</a></li>
                    </ul>
                  </div>
                </div> 
              </div></div>
              <div class="header__content-center">
                <form class="ps-form--quick-search" action="<?php echo base_url().'index.php/home/search'?>" method="post"style="align:center">
                  <div class="form-group--icon"><i class="icon-chevron-down"></i>
                    <select class="form-control" name="categorySelect" id="selectId">
                      <option value="all">All</option>
                        <?php foreach($subcategory_list as $subcategory){?>
                          <option value="<?=$subcategory->subcategoryId?>"><?=$subcategory->subcategoryName?></option>
                        <?php } ?>
                    </select>
                  </div>
                  <input class="form-control" type="text" name="keyword" placeholder="I'm looking for..." >
                  <button>Search</button>
                </form>
              </div>
              <div class="header__content-right">
                <div class="header__actions">
                  <div class="ps-block--header-hotline">
                  </div>
                  <div class="ps-cart--mini"><a class="header__extra" href="#"><i class="icon-cart"></i><span><i>{{totalItems}}</i></span></a>
                   <?php if($this->cart->total_items() > 0){  ?>
                    <div class="ps-cart__content">
                      <?php $i = 1; ?>
                      <?php foreach ($this->cart->contents() as $items): ?>   
                      <div class="ps-cart__items"id="<?=$items['rowid']?>">
                        <div class="ps-product--cart-mobile">
                          <div class="ps-product__thumbnail"><a href="#"><img src="<?php echo base_url().'assets/app-assets/images/product/'.$items['img']?>" alt=""></a></div>
                          <div class="ps-product__content" ><a class="ps-product__remove" ng-click="crossBtn('<?=$items['rowid']?>','<?=$items['subtotal']?>','<?=$items['qty']?>')"><i class="icon-cross"></i></a><a href="product-default.html"><?php echo $items['name']; ?></a>
                            <p><strong>Sold by:</strong>  YOUNG SHOP</p><small><?php echo $this->cart->format_number($items['qty']); ?> x $<?php echo $this->cart->format_number($items['price']); ?></small>
                          </div>
                        </div>
                      </div>
                      <?php $i++; ?>
                      <?php endforeach; ?>
                      <div class="ps-cart__footer" ng-show="subTotal > 0">
                        <h3>Sub Total:<strong>${{subTotal}}</strong></h3>
                        <figure><a class="ps-btn" href="<?php echo base_url().'index.php/home/cart'?>">View Cart</a><a class="ps-btn" href="<?php echo base_url().'index.php/home/cart'?>">Checkout</a></figure>
                      </div>
                    </div>
                   <?php }  ?>
            </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <nav class="navigation">
        <!-- <div class="container"> -->
            <div class="row">
              <div class="col-3"></div>
              <div class="col-8">
                  <ul class="menu ">
                        <li><a href="<?php echo base_url()?>">Home</a></li>
                        <li><a href="<?php echo base_url().'index.php/home/shop'?>">Buyers</a></li>
                        <!-- <li><a href="<?php echo base_url().'index.php/home/vendor'?>">Sellers</a></li> -->
                        <li><a href="<?php echo base_url().'index.php/home/cart'?>">Cart</a></li>
                        <li><a href="<?php echo base_url().'index.php/home/aboutus'?>">About Us</a></li>
                        <li><a href="<?php echo base_url().'index.php/home/contactus'?>">Contact Us</a></li>
                  </ul>
              </div>
            </div>
        <!-- </div> -->
      </nav>
    </header>
    <header class="header header--mobile autopart" data-sticky="true">
      <div class="header__top">
        <div class="header__left">
          <p>Welcome to Excess Yard Online Shopping Store !</p>
        </div>
        <div class="header__right">
          <ul class="navigation__extra">
			      <!-- <li><a href="<?php echo base_url().'index.php/home/vendor'?>">Go to Vendor</a></li>
			      <li><a href="<?php echo base_url().'index.php/home/asearch'?>"><i class="icon-file-search"></i>&nbsp;&nbsp;Advacned Search</a></li> -->
          </ul>
        </div>
      </div>
      <div class="navigation--mobile">
        <div class="navigation__left">
		      	<a class="ps-logo" href="<?php echo base_url()?>"><img style="width:60px"src="<?php echo base_url().'assets/img/Artwork.png'?>" alt="">&nbsp;EXCESS<span style="color:#5fa30f">YARD</span></a>
        </div>
        <div class="navigation__right">
          <div class="header__actions">
            <div class="ps-cart--mini"><a class="header__extra" href="#"><i class="icon-cart"></i><span><?=$this->cart->total_items();?></span></a>
              <div class="ps-cart__content">
                <div class="ps-cart__items">
                <?php $i = 1; ?>
                  <?php foreach ($this->cart->contents() as $items): ?>   
                  <div class="ps-product--cart-mobile">
                    <div class="ps-product__thumbnail"><a href="#"><img src="<?php echo base_url().'assets/app-assets/images/product/'.$items['img']?>" alt=""></a></div>
                    <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html"><?php echo $items['name']; ?></a>
                      <p><strong>Sold by:</strong>  YOUNG SHOP</p><small><?php echo $this->cart->format_number($items['qty']); ?> x $<?php echo $this->cart->format_number($items['price']); ?></small>
                    </div>
                  </div>
                <?php $i++; ?>
                  <?php endforeach; ?>  
                    </div>
                <div class="ps-cart__footer">
                  <h3>Sub Total:<strong>$<?php echo $this->cart->format_number($this->cart->total());?></strong></h3>
                  <figure><a class="ps-btn" href="<?php echo base_url().'index.php/home/cart'?>">View Cart</a><a class="ps-btn" href="<?php echo base_url().'index.php/home/cart'?>">Checkout</a></figure>
                </div>
              </div>
            </div>
            <div class="ps-block--user-header">
			  <div class="ps-block__left"><i class="icon-user"></i></div>
			  
              <div class="ps-block__right"><a href="<?php echo base_url().'index.php/login'?>">Login</a><a href="<?php echo base_url().'index.php/register'?>">Register</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="ps-search--mobile">
        <form class="ps-form--search-mobile" action="index.html" method="get">
          <div class="form-group--nest">
            <input class="form-control" type="text" placeholder="Search something...">
            <button><i class="icon-magnifier"></i></button>
          </div>
        </form>
      </div>
    </header>
    <div class="ps-panel--sidebar" id="cart-mobile">
      <div class="ps-panel__header">
        <h3>Shopping Cart</h3>
      </div>
      <div class="navigation__content">
        <div class="ps-cart--mobile">
          <div class="ps-cart__content">
           <?php $i = 1; ?>
             <?php foreach ($this->cart->contents() as $items): ?>   
             <div class="ps-product--cart-mobile">
               <div class="ps-product__thumbnail"><a href="#"><img src="<?php echo base_url().'assets/app-assets/images/product/'.$items['img']?>" alt=""></a></div>
               <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html"><?php echo $items['name']; ?></a>
                 <p><strong>Sold by:</strong>  YOUNG SHOP</p><small><?php echo $this->cart->format_number($items['qty']); ?> x $<?php echo $this->cart->format_number($items['price']); ?></small>
               </div>
            </div>
          <?php $i++; ?>
            <?php endforeach; ?>  
                    </div>

          <div class="ps-cart__footer">
            <h3>Sub Total:<strong>$<?php echo $this->cart->format_number($this->cart->total());?></strong></h3>
            <figure><a class="ps-btn" href="<?php echo base_url().'index.php/home/cart'?>">View Cart</a><a class="ps-btn" href="<?php echo base_url().'index.php/home/cart'?>">Checkout</a></figure>
          </div>
        </div>
      </div>
    </div>
    <div class="ps-panel--sidebar" id="navigation-mobile">
      <div class="ps-panel__header">
        <h3>Categories</h3>
      </div>
      <div class="ps-panel__content">
        <ul class="menu--mobile">
          <?php foreach($category_list as $category){ ?>
            <li><a href="<?php echo base_url().'index.php/home/shop/'.$category->categoryId?>"><?=$category->categoryName?></a>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
    <div class="navigation--list">
      <div class="navigation__content"><a class="navigation__item ps-toggle--sidebar" href="#menu-mobile"><i class="icon-menu"></i><span> Menu</span></a><a class="navigation__item ps-toggle--sidebar" href="#navigation-mobile"><i class="icon-list4"></i><span> Categories</span></a><a class="navigation__item ps-toggle--sidebar" href="#search-sidebar"><i class="icon-magnifier"></i><span> Search</span></a><a class="navigation__item ps-toggle--sidebar" href="<?php echo base_url().'index.php/home/cart'?>"><i class="icon-cart"></i><span> Cart</span></a></div>
    </div>
    <div class="ps-panel--sidebar" id="search-sidebar">
      <div class="ps-panel__header">
        <form class="ps-form--search-mobile" action="<?php echo base_url().'home/search'?>" method="get">
          <div class="form-group--nest">
            <input class="form-control" type="text" name="keyword" placeholder="Search something...">
            <button><i class="icon-magnifier"></i></button>
          </div>
        </form>
      </div>
      <div class="navigation__content"></div>
    </div>
    <div class="ps-panel--sidebar" id="menu-mobile">
      <div class="ps-panel__header">
        <h3>Menu</h3>
      </div>
      <div class="ps-panel__content">
        <ul class="menu--mobile">
          <li class="current-menu-item "><a href="<?php echo base_url()?>">Home</a><span class="sub-toggle"></span></li>
          <li class="current-menu-item "><a href="<?php echo base_url().'index.php/home/shop'?>">Buyers</a><span class="sub-toggle"></span></li>
          <!-- <li class="current-menu-item "><a href="<?php echo base_url().'index.php/home/vendor'?>">Sellers</a><span class="sub-toggle"></span></li> -->
          <li class="current-menu-item "><a href="<?php echo base_url().'index.php/home/cart'?>">Cart</a><span class="sub-toggle"></span></li>
          <li class="current-menu-item "><a href="<?php echo base_url().'index.php/home/aboutus'?>">About Us</a><span class="sub-toggle"></span></li>
          <li class="current-menu-item "><a href="<?php echo base_url().'index.php/home/contactus'?>">Contact Us</a><span class="sub-toggle"></span></li>
        </ul>
      </div>
    </div>
    <div class="ps-page--my-account">
      <div class="ps-breadcrumb">
        <div class="container">
          <ul class="breadcrumb">
            <li><a href="<?php echo base_url();?>">Home</a></li>
            <li>My account</li>
          </ul>
        </div>
      </div>
      <div class="ps-my-account">
        <div class="container">
          <div class="ps-form--account ps-tab-root">
            <ul class="ps-tab-list">
              <li class="active"><a href="#sign-in">Login</a></li>
              <li><a href="#register">Register</a></li>
            </ul>
            <div class="ps-tabs">
              <div class="ps-tab active" id="sign-in">
                <div class="ps-form__content">
                        <div ng-if="flag" id="loginAlert"class="alert alert-danger mb-2" role="alert">
                            <strong>{{ngAlertTopic}}:</strong> {{ngAlert}}
                        </div>
                       <h5>Log In Your Account</h5>
                        <div class="form-group">
                            <input class="form-control" type="text" id="user-name" name="email"placeholder="Email address">
                        </div>
                        <div class="form-group form-forgot">
                            <input class="form-control" type="password"id="user-password"  name="pass"placeholder="Password">
                            <!-- <a href="">Forgot?</a> -->
                        </div>
                        <div class="form-group" ng-if="flagVerify">
                            <input class="form-control" type="text"id="verifycode"  name="code" placeholder="VerfiyCode...">
                        </div>
                        <div class="form-group">
                            <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="remember-me" name="remember-me"/>
                            <label for="remember-me">Rememeber me</label>
                            </div>
                        </div>
                        <div class="form-group submtit">
                            <button ng-click="loginFunc()" class="ps-btn ps-btn--fullwidth">Login</button>
                        </div>
                </div>
                <div class="ps-form__footer">
                  <!-- <p>Connect with:</p>
                  <ul class="ps-list--social">
                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                  </ul> -->
                </div>
              </div>
              <div class="ps-tab" id="register">
                <div class="ps-form__content">
                  <form >
                      <div ng-if="flagReg" id="loginAlert"class="alert alert-danger mb-2" role="alert">
                            <strong>{{ngAlertTopic}}:</strong> {{ngAlertReg}}
                        </div>
                      <div ng-if="flagRegTrue" class="alert alert-success mb-2" role="alert">
                            <strong>{{ngAlertTopic}}:</strong> {{ngAlertRegTrue}}
                      </div>
                    <h5>Register An Account</h5>
                    <div class="form-group">
                        <input class="form-control" type="text" id="email"required placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text"id="fname"required placeholder="User Name">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text"id="position"required placeholder="Position">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text"id="company"required placeholder="Company Name">
                    </div>
                     <!-- <div class="form-group">
                        <input class="form-control" type="date" name="birthday" placeholder="Birthday" required>
                    </div> -->
                    <!-- <div class="form-group">
                        <label>Select your photo file:</label>
                        <label id="projectinput7" class="file center-block">
                                <input type="file" name="userfile" multiple="">  
                            <span class="file-custom"></span>
                        </label>
                    </div> -->
                    <div ng-if="passflag"class="alert alert-danger mb-2" role="alert">
                            <strong>Alert:</strong> {{ngAlert1}}
                    </div><div class="form-group">
                        <input class="form-control" type="password"id="password" placeholder="Password" required>
                    </div>
                    
                    <div class="form-group submtit">
                      
                        <button ng-click="registerBtn()"class="ps-btn ps-btn--fullwidth">Register</button>
                    </div>
                    </form>
                </div>
                <div class="ps-form__footer">
                  <!-- <p>Connect with:</p>
                  <ul class="ps-list--social">
                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                  </ul> -->
                </div>
              </div>
            </div>
        </div>
        </div>
      </div>
    </div>
    
    <footer class="ps-footer ps-footer--2">
      <div class="container">
        <div class="ps-footer__content">
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
              <aside class="widget widget_footer">
                <h4 class="widget-title">Quick links</h4>
                <ul class="ps-list--link">
                  <!-- <li><a href="<?php echo base_url().'index.php/home/vendor'?>">Sellers</a></li> -->
                  <li><a href="<?php echo base_url().'index.php/home/shop'?>">Buyers</a></li>
                  <li><a href="<?php echo base_url().'index.php/home/faqs'?>">FAQs</a></li>
                  <li><a href="<?php echo base_url().'index.php/home/returns'?>">Term & Conditions</a></li>
                </ul>
              </aside>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
              <aside class="widget widget_footer">
                <h4 class="widget-title">Company</h4>
                <ul class="ps-list--link">
                  <li><a href="<?php echo base_url().'index.php/home/aboutus'?>">About Us</a></li>
                  <li><a href="<?php echo base_url().'index.php/home/career'?>">Careers</a></li>
                  <li><a href="<?php echo base_url().'index.php/home/privacy'?>">Privacy Policy</a></li>
                  <li><a href="<?php echo base_url().'index.php/home/press'?>">Press</a></li>
                </ul>
              </aside>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 ">
              <aside class="widget widget_footer">
                <h4 class="widget-title">Contact</h4>
                <ul class="ps-list--link">
                  <li><a href="http://info@excessyard.com">info@excessyard.com</a></li>
                  <li><a href="#">Dubai,UAE</a></li>
                </ul>
              </aside>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12 ">
              <aside class="widget widget_newletters">
                <h4 class="widget-title">Newsletter</h4>
                <form class="ps-form--newletter" action="#" method="get">
                  <div class="form-group--nest">
                    <input class="form-control" type="text" placeholder="Email Address">
                    <button class="ps-btn">Subscribe</button>
                  </div>
                  <ul class="ps-list--social">
                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                  </ul>
                </form>
              </aside>
            </div>
          </div>
        </div>
        <div class="ps-footer__copyright">
          <div class="row">
            <div class="col-xl-12 col-lg-12">
            <a  href="<?php echo base_url()?>" ><img style="width:80px;"src="<?php echo base_url().'assets/img/Artwork.png'?>" alt=""> &nbsp;© 2019 EXCESSYARD<span style="color:rgb(59,185,116)"> All Rights Reserved</span></a>

            </div>
            <!-- <div class="col-xl-6 col-lg-6" style="" >
                <p  style="width:100%;height:100%;vertical-align: middle!important;">© 2019 Shopping. All Rights Reserved</p>
            </div> -->
          </div>
          <!-- <p><span>We Using Safe Payment For:</span><a href="#"><img src="<?php echo base_url().'assets/frontend/img/payment-method/1.jpg';?>" alt=""></a><a href="#"><img src="<?php echo base_url().'assets/frontend/img/payment-method/2.jpg';?>" alt=""></a><a href="#"><img src="<?php echo base_url().'assets/frontend/img/payment-method/3.jpg';?>" alt=""></a><a href="#"><img src="<?php echo base_url().'assets/frontend/img/payment-method/4.jpg';?>" alt=""></a><a href="#"><img src="<?php echo base_url().'assets/frontend/img/payment-method/5.jpg';?>" alt=""></a></p> -->
        </div>
      </div>
    </footer>
    <div id="back2top"><i class="pe-7s-angle-up"></i></div>
    <div class="ps-site-overlay"></div>
    <div id="loader-wrapper">
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <div class="ps-search" id="site-search"><a class="ps-btn--close" href="#"></a>
      <div class="ps-search__content">
        <form class="ps-form--primary-search" action="do_action" method="post">
          <input class="form-control" type="text" placeholder="Search for...">
          <button><i class="aroma-magnifying-glass"></i></button>
        </form>
      </div>
    </div>
    <!--include shared/cart-sidebar-->
    <!-- Plugins-->
    <script src="<?php echo base_url().'assets/js/angular.js';?>"></script>
    <script src="<?php echo base_url().'assets/frontend/plugins/jquery-1.12.4.min.js';?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="<?php echo base_url().'assets/frontend/plugins/owl-carousel/owl.carousel.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/frontend/plugins/bootstrap4/js/bootstrap.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/frontend/plugins/imagesloaded.pkgd.js';?>"></script>
    <script src="<?php echo base_url().'assets/frontend/plugins/masonry.pkgd.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/frontend/plugins/isotope.pkgd.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/frontend/plugins/jquery.matchHeight-min.js';?>"></script>
    <script src="<?php echo base_url().'assets/frontend/plugins/slick/slick/slick.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/frontend/plugins/jquery-bar-rating/dist/jquery.barrating.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/frontend/plugins/slick-animation.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/frontend/plugins/lightGallery-master/dist/js/lightgallery-all.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/frontend/plugins/jquery-ui/jquery-ui.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/frontend/plugins/sticky-sidebar/dist/sticky-sidebar.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/frontend/plugins/YTPlayer/dist/jquery.mb.YTPlayer.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/frontend/plugins/jquery.slimscroll.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/frontend/plugins/select2/dist/js/select2.full.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/frontend/plugins/gmap3.min.js';?>"></script>
    <!-- Custom scripts-->
    <script src="<?php echo base_url().'assets/frontend/js/main1.js';?>"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxflHHc5FlDVI-J71pO7hM1QJNW1dRp4U&amp;region=GB"></script>
    <script>
        base_url = "<?php echo base_url(); ?>";
    </script>
<script>
    
    var App = angular.module('myFrontend',[]);
    App.controller('homeController', function($scope, $http){
        $scope.flag = false; $scope.passflag = false;
        $scope.ngAlertTopic = 'Alert';  $scope.flagVerify = false;
    $scope.subTotal = Number.parseFloat('<?php echo $this->cart->format_number($this->cart->total());?>');
    $scope.totalItems = Number.parseInt('<?=$this->cart->total_items();?>');
    $scope.crossBtn = function(rowId,sub, amount){
              // $scope.flag = false;
                $('#'+ rowId).hide();
                data = {
                    id: rowId
                };
                $http.post(base_url + 'index.php/delcart',JSON.stringify(data)).then(function (response){
                    // $scope.pc_state_arr = response.data;
                    // alert(JSON.stringify(response.data));
                    if(response.data == 'true')
                    {     
                        $scope.subTotal -= Number.parseFloat(sub);
                        $scope.totalItems -= Number.parseInt(amount);
                        alert('true');
                    }
                    else{
                        alert('false');
                    }
                });
            }
        $scope.loginFunc = function(){
            uName = document.getElementById("user-name").value;
            uPass = document.getElementById("user-password").value;
            // $scope.flagVerify = true;
            // alert(uName);
            // alert(uPass);
            uCode = 'xxx';
            if($scope.flagVerify)
               uCode = document.getElementById("verifycode").value;
              // alert(uCode);
            // uCheck = document.getElementById("remember-me").checked;
            // alert(uName);
            if(uName == '' || uPass == ''){
                $('#loginAlert').addClass('alert-danger');
                $scope.flag = true; 
                $scope.ngAlert = "you must input password and name correctly!";
            }else{
                $scope.flag = false;
                data = {
                    userId: uName,
                    password: uPass,
                    code: uCode
                };
                $http.post(base_url + 'index.php/login/customer',JSON.stringify(data)).then(function (response){
                      // $scope.flagVerify = true;
                    // $scope.pc_state_arr = response.data;
                    // alert(JSON.stringify(response.data));
                    if(response.data == 'verify')
                    {
                      alert('you must verify your email firstly!!!');
                      $scope.flagVerify = true;
                    }
                    else if(response.data == 'true'){
                      alert('you have been logged in successfully.');
                      // $('#loginAlert').removeClass('alert-danger').addClass('alert-success');
                      // $scope.ngAlertStyle = 'success';
                      // $scope.ngAlert = "you must input password and name correctly!";
                        location.assign(base_url);
                     }
                   else{
                     alert(response.data);
                        $scope.flag = true; 
                        $scope.ngAlert = "Username or Password is incorrect";
                    }
                });
            }
        }
        function validPass(pass){
          var temp = [], i;
          if(pass.length <= '6')
            temp.push('more than 6 letters')
          var reg = '~`!@#$%^&*()_+=-/?><;{}';
          
          for(i = 0; i< reg.length;i ++){
            if(pass.indexOf(reg[i]) != -1)
              break;
          }
          if(i == reg.length)
            temp.push('one more special characters');
          if(temp.length > 0)
            return temp;
          return 'true';
        }
        $scope.registerBtn = function(){
          var pass = $('#password').val();
          check_pass = validPass(pass);
          if(check_pass != 'true'){
            $scope.passflag = true;
            $scope.ngAlert1 = 'Password must have ' + check_pass[0];
            if(check_pass >= 2)
              $scope.ngAlert1 += ' and ' + check_pass[1];
          }else{
           data = {
                    email: $('#email').val(),
                    fname: $('#fname').val(),
                    position: $('#position').val(),
                    company: $('#company').val(),
                    gender: 'male',
                    password: pass
            };
                $http.post(base_url + 'index.php/CRegister',JSON.stringify(data)).then(function (response){
                    // $scope.pc_state_arr = response.data;
                    // alert(JSON.stringify(response.data));
                    if(response.data == 'true'){
                        $scope.flagReg = false; 
                      $scope.flagRegTrue = true;
                      $scope.ngAlertRegTrue = "you have been registered successfully.";
                      // location.assign(base_url);
                    }
                    else{
                      $scope.flagRegTrue = false;
                        $scope.flagReg = true; 
                        $scope.ngAlertReg = "This email is already exists";
                    }
                });
              }
        }
    });
</script>
</body>
</html>