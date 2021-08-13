<!DOCTYPE html>
<html lang="en">
  <head>
    <title>tenderd Site</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">

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
<body ng-app="myFrontend" ng-controller = 'homeController' class="layout-2">
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
                      <div class="ps-block--user-header">
                        <div class="ps-block__left"><i class="icon-user"></i></div>
                        <div class="ps-block__right"><a href="<?php echo base_url().'index.php/login'?>">Login</a><a href="<?php echo base_url().'index.php/register'?>">Register</a></div>
                      </div>
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
                <!-- <div class="ps-cart__items">
                  <div class="ps-product--cart-mobile">
                    <div class="ps-product__thumbnail"><a href="#"><img src="<?php echo base_url().'assets/frontend/img/products/clothing/7.jpg'?>" alt=""></a></div>
                    <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                      <p><strong>Sold by:</strong>  YOUNG SHOP</p><small>1 x $59.99</small>
                    </div>
                  </div>
                </div> -->
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
    <div class="ps-breadcrumb">
      <div class="container">
        <ul class="breadcrumb">
          <li><a href="<?=base_url()?>">Home</a></li>
          <li>About us</li>
        </ul>
      </div>
    </div>
    <div class="ps-page--single" id="about-us"><img src="<?=base_url()?>assets/frontend/img/bg/about-us.jpg" alt="">
      <div class="ps-about-intro">
        <div class="container">
          <div class="ps-section__header">
            <h4>Welcome to Excess Yard</h4>
            <h3>We connect millions of buyers and sellers around the world, empowering people & creating economic opportunity for all.</h3>
            <p>Within our markets, millions of people around the world connect, both online and offline, to make, sell and buy unique goods. We also offer a wide range of Seller Services and tools that help creative entrepreneurs start, manage and scale their businesses. Our mission is to reimagine commerce in ways that build a more fulfilling and lasting world, and we’re committed to using the power of business to strengthen communities and empower people.</p>
          </div>
          <div class="ps-section__content">
            <div class="row">
              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                <div class="ps-block--icon-box"><i class="icon-cube"></i>
                  <h4>45M</h4>
                  <p>Product for sale</p>
                </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                <div class="ps-block--icon-box"><i class="icon-store"></i>
                  <h4>1.8M</h4>
                  <p>Sellers Active on Excess Yard</p>
                </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                <div class="ps-block--icon-box"><i class="icon-bag2"></i>
                  <h4>30.6M</h4>
                  <p>Buyer active on Excess Yard</p>
                </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                <div class="ps-block--icon-box"><i class="icon-cash-dollar"></i>
                  <h4>$2.46M</h4>
                  <p>Annual gross merchandise sales</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--include ../../partials/pages/about-us/milestone-->
      <div class="ps-our-team">
        <div class="container">
          <div class="ps-section__header">
            <h3>Meet Our Leaders</h3>
          </div>
          <div class="ps-section__content">
            <figure>
              <div class="ps-block--ourteam"><img src="<?=base_url()?>assets/frontend/img/users/our-team/1.jpg" alt="">
                <div class="ps-block__content">
                  <h4>Robert Downey Jr</h4>
                  <p>CEO Fouder</p>
                  <ul>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </figure>
            <figure>
              <div class="ps-block--ourteam"><img src="<?=base_url()?>assets/frontend/img/users/our-team/2.jpg" alt="">
                <div class="ps-block__content">
                  <h4>Robert Downey Jr</h4>
                  <p>CEO Fouder</p>
                  <ul>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </figure>
            <figure>
              <div class="ps-block--ourteam"><img src="<?=base_url()?>assets/frontend/img/users/our-team/3.jpg" alt="">
                <div class="ps-block__content">
                  <h4>Robert Downey Jr</h4>
                  <p>CEO Fouder</p>
                  <ul>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </figure>
            <figure>
              <div class="ps-block--ourteam"><img src="<?=base_url()?>assets/frontend/img/users/our-team/4.jpg" alt="">
                <div class="ps-block__content">
                  <h4>Robert Downey Jr</h4>
                  <p>CEO Fouder</p>
                  <ul>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </figure>
            <figure>
              <div class="ps-block--ourteam"><img src="<?=base_url()?>assets/frontend/img/users/our-team/5.jpg" alt="">
                <div class="ps-block__content">
                  <h4>Robert Downey Jr</h4>
                  <p>CEO Fouder</p>
                  <ul>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </figure>
            <figure>
              <div class="ps-block--ourteam"><img src="<?=base_url()?>assets/frontend/img/users/our-team/6.jpg" alt="">
                <div class="ps-block__content">
                  <h4>Robert Downey Jr</h4>
                  <p>CEO Fouder</p>
                  <ul>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </figure>
            <figure>
              <div class="ps-block--ourteam"><img src="<?=base_url()?>assets/frontend/img/users/our-team/7.jpg" alt="">
                <div class="ps-block__content">
                  <h4>Robert Downey Jr</h4>
                  <p>CEO Fouder</p>
                  <ul>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </figure>
            <!-- <figure data-mh="our-team">
              <div class="ps-block--ourteam blank"><a href="#">Become <br> member in  <br> team</a></div>
            </figure> -->
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
    // $(function() {
    //     $("#selectId").val(2);
    // });
    var App = angular.module('myFrontend',[]);
    App.controller('homeController', function($scope, $http){ 
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
    });
</script>
</body>
</html>