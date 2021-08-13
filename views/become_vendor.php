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
<body ng-app="myFrontend" ng-controller = 'homeController' ng-init="passflag=false"class="layout-2">
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
                        <li><a href="<?php echo base_url().'index.php/home/vendor'?>">Sellers</a></li>
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
          <li class="current-menu-item "><a href="<?php echo base_url().'index.php/home/shop'?>">Shop</a><span class="sub-toggle"></span></li>
          <li class="current-menu-item "><a href="<?php echo base_url().'index.php/home/vendor'?>">Vendor</a><span class="sub-toggle"></span></li>
          <li class="current-menu-item "><a href="<?php echo base_url().'index.php/home/cart'?>">Cart</a><span class="sub-toggle"></span></li>
          <li class="current-menu-item "><a href="<?php echo base_url().'index.php/home/aboutus'?>">AboutUs</a><span class="sub-toggle"></span></li>
          <li class="current-menu-item "><a href="<?php echo base_url().'index.php/home/contactus'?>">ContactUs</a><span class="sub-toggle"></span></li>
        </ul>
      </div>        
    </div>
    <div class="ps-page--single">
      <div class="ps-breadcrumb">
        <div class="container">
          <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li>Become a Vendor</li>
          </ul>
        </div>
      </div>
      <div class="ps-vendor-banner bg--cover" data-background="<?php echo base_url().'assets/img/carousel/bg6.jpg'?>">
        <div class="container">
          <h2>Millions Of Shoppers Can’t Wait To See What You Have In Store</h2><a class="ps-btn ps-btn--lg" href="#registerId">Start Selling</a>
        </div>
      </div>
      <div class="ps-section--vendor ps-vendor-about">
        <div class="container">
          <div class="ps-section__header">
            <p>WHY SELL ON MARTFURY</p>
            <h4>Join a marketplace where nearly 50 million buyers around <br> the world shop for unique items</h4>
          </div>
          <div class="ps-section__content">
            <div class="row">
              <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                <div class="ps-block--icon-box-2">
                  <div class="ps-block__thumbnail"><img src="<?=base_url()?>assets/frontend/img/icons/vendor-1.png" alt=""></div>
                  <div class="ps-block__content">
                    <h4>Low Fees</h4>
                    <div class="ps-block__desc" data-mh="about-desc">
                      <p>It doesn’t take much to list your items and once you make a sale, Martfury’s transaction fee is just 2.5%.</p>
                    </div><a href="#">Learn more</a>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                <div class="ps-block--icon-box-2">
                  <div class="ps-block__thumbnail"><img src="<?=base_url()?>assets/frontend/img/icons/vendor-2.png" alt=""></div>
                  <div class="ps-block__content">
                    <h4>Powerful Tools</h4>
                    <div class="ps-block__desc" data-mh="about-desc">
                      <p>Our tools and services make it easy to manage, promote and grow your business.</p>
                    </div><a href="#">Learn more</a>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                <div class="ps-block--icon-box-2">
                  <div class="ps-block__thumbnail"><img src="<?=base_url()?>assets/frontend/img/icons/vendor-3.png" alt=""></div>
                  <div class="ps-block__content">
                    <h4>Support 24/7</h4>
                    <div class="ps-block__desc" data-mh="about-desc">
                      <p>Our tools and services make it easy to manage, promote and grow your business.</p>
                    </div><a href="#">Learn more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="ps-section--vendor ps-vendor-milestone">
        <div class="container">
          <div class="ps-section__header">
            <p>How it works</p>
            <h4>Easy to start selling online on Martfury just 4 simple steps</h4>
          </div>
          <div class="ps-section__content">
            <div class="ps-block--vendor-milestone">
              <div class="ps-block__left">
                <h4>Register and list your products</h4>
                <ul>
                  <li>Register your business for free and create a product catalogue. Get free training on how to run your online business</li>
                  <li>Our Martfury Advisors will help you at every step and fully assist you in taking your business online</li>
                </ul>
              </div>
              <div class="ps-block__right"><img src="<?=base_url()?>assets/frontend/img/vendor/milestone-1.png" alt=""></div>
              <div class="ps-block__number"><span>1</span></div>
            </div>
            <div class="ps-block--vendor-milestone reverse">
              <div class="ps-block__left">
                <h4>Receive orders and sell your product</h4>
                <ul>
                  <li>Register your business for free and create a product catalogue. Get free training on how to run your online business</li>
                  <li>Our Martfury Advisors will help you at every step and fully assist you in taking your business online</li>
                </ul>
              </div>
              <div class="ps-block__right"><img src="<?=base_url()?>assets/frontend/img/vendor/milestone-2.png" alt=""></div>
              <div class="ps-block__number"><span>2</span></div>
            </div>
            <div class="ps-block--vendor-milestone">
              <div class="ps-block__left">
                <h4>Package and ship with ease</h4>
                <ul>
                  <li>Register your business for free and create a product catalogue. Get free training on how to run your online business</li>
                  <li>Our Martfury Advisors will help you at every step and fully assist you in taking your business online</li>
                </ul>
              </div>
              <div class="ps-block__right"><img src="<?=base_url()?>assets/frontend/img/vendor/milestone-3.png" alt=""></div>
              <div class="ps-block__number"><span>3</span></div>
            </div>
            <div class="ps-block--vendor-milestone reverse">
              <div class="ps-block__left">
                <h4>Package and ship with ease</h4>
                <ul>
                  <li>Register your business for free and create a product catalogue. Get free training on how to run your online business</li>
                  <li>Our Martfury Advisors will help you at every step and fully assist you in taking your business online</li>
                </ul>
              </div>
              <div class="ps-block__right"><img src="<?=base_url()?>assets/frontend/img/vendor/milestone-4.png" alt=""></div>
              <div class="ps-block__number"><span>4</span></div>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="ps-section--vendor ps-vendor-best-fees">
        <div class="container">
          <div class="ps-section__header">
            <p>BEST FEES TO START</p>
            <h4>Affordable, transparent, and secure</h4>
          </div>
          <div class="ps-section__content">
            <h5>It doesn’t cost a thing to list up to 50 items a month, and you only pay after your stuff sells. It’s just a small percent of the money you earn</h5>
            <div class="ps-section__numbers">
              <figure>
                <h3>$0</h3><span>List Fee</span>
              </figure>
              <figure>
                <h3>5%</h3><span>Final Value Fee</span>
              </figure>
            </div>
            <div class="ps-section__desc">
              <figure>
                <figcaption>Here's what you get for your fee:</figcaption>
                <ul>
                  <li>A worldwide community of more than 160 million shoppers.</li>
                  <li>Shipping labels you can print at home, with big discounts on postage.</li>
                  <li>Seller protection and customer support to help you sell your stuff.</li>
                </ul>
              </figure>
            </div>
            <div class="ps-section__highlight"><img src="<?=base_url()?>assets/frontend/img/icons/vendor-4.png" alt="">
              <figure>
                <p>We process payments with PayPal, an external payments platform that allows you to process transactions with a variety of payment methods. Funds from PayPal sales on Martfury will be deposited into your PayPal account.</p>
              </figure>
            </div>
            <div class="ps-section__footer">
              <p>Listing fees are billed for 0.20 USD, so if your bank’s currency is not USD, the amount in your currency may vary based on changes in the exchange rate.</p>
            </div>
          </div>
        </div>
      </div> -->
      <div class="ps-contact-form" id="registerId"style="padding:10!important;background-color:white!important">
        <div class="container">
          <form class="ps-form--contact-us" action="mailto:info@excessyard.com" method="post">
            <div style="padding:20px;background-color:rgb(218,239,214)!important">
              <h3 style="margin-bottom:30px;">Sellers</h3>
              <p>Please fill out the following form with the required details and we will get back to you as soon as possible. Alternatively, Please reacly on <a href="http://info@excessyard.com" style="color:#3BB974">info@excessyard.com</a>with your requirements</p>
            </div>
            <br>
             <label for="">Contact Information</label>
            <div class="row">
              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                  <input class="form-control" type="text" placeholder="First Name" name="first" required>
                </div>
              <div class="col-xl-4 col-lg-4 col-md-4  col-sm-4 col-4 ">
                <div class="form-group">
                  <input class="form-control" type="text" placeholder="Last Name" name="last" required>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 ">
                <div class="form-group">
                  <input class="form-control" type="text" placeholder="Company Name" name="company" required>
                </div>
              </div>

              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 ">
                <div class="form-group">
                  <input class="form-control" type="text" placeholder="Phone Number"  name="phone" required>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 ">
                <div class="form-group">
                  <input class="form-control" type="text" placeholder="E-mail"  name="email" required>
                </div>
              </div>
              </div>
              <label for="">Material Details</label>
             <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                  <div class="form-group">
                      <!-- <textarea class="form-control" type="text" placeholder="E-mail"  id="email" required> -->
                      <textarea class="form-control"name="material" id="" cols="30" rows="5"  placeholder="Please provide a breif summary of the material you want to post on the website and sell"></textarea>
                    </div>
                </div>
                <!--<div class="form-group">
                  <input class="form-control" type="password" id="password"placeholder="password...">
                </div>
              </div> -->
            </div>
            <div class="form-group">
              <button type="submit" class="ps-btn">Submit</button>
              <!-- <button ng-click="registerBtn()" class="ps-btn">Register</button> -->
              <!-- <a class="ps-btn" href="<?=base_url()?>index.php/vendor">Go to Skip</a> -->
            </div>
          </form>
        </div>
      </div>
      <!-- <div class="ps-section--vendor ps-vendor-testimonials">
        <div class="container">
          <div class="ps-section__header">
            <p>SELLER STORIES</p>
            <h4>See Seller share about their successful on Martfury</h4>
          </div>
          <div class="ps-section__content">
            <div class="ps-carousel--nav owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-item="2" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="2" data-owl-duration="1000" data-owl-mousedrag="on">
              <div class="ps-block--testimonial">
                <div class="ps-block__header"><img src="<?=base_url()?>assets/frontend/img/users/1.jpg" alt=""></div>
                <div class="ps-block__content"><i class="icon-quote-close"></i>
                  <h4>Kanye West<span>Head Chef at BBQ Restaurant</span></h4>
                  <p>Sed elit quam, iaculis sed semper sit amet udin vitae nibh. at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.</p>
                </div>
              </div>
              <div class="ps-block--testimonial">
                <div class="ps-block__header"><img src="<?=base_url()?>assets/frontend/img/users/2.png" alt=""></div>
                <div class="ps-block__content"><i class="icon-quote-close"></i>
                  <h4>Anabella Kleva<span>Boss at TocoToco</span></h4>
                  <p>Sed elit quam, iaculis sed semper sit amet udin vitae nibh. at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.</p>
                </div>
              </div>
              <div class="ps-block--testimonial">
                <div class="ps-block__header"><img src="<?=base_url()?>assets/frontend/img/users/3.jpg" alt=""></div>
                <div class="ps-block__content"><i class="icon-quote-close"></i>
                  <h4>William Roles<span>Head Chef at BBQ Restaurant</span></h4>
                  <p>Sed elit quam, iaculis sed semper sit amet udin vitae nibh. at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
      <!-- <div class="ps-section--vendor ps-vendor-faqs">
        <div class="container">
          <div class="ps-section__header">
            <p>FREQUENTLY ASKED QUESTIONS</p>
            <h4>Here are some common questions about selling on Martfury</h4>
          </div>
          <div class="ps-section__content">
            <div class="row">
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                <figure>
                  <figcaption>How do fees work on Martfury?</figcaption>
                  <p>Joining and starting a shop on Martfury is free. There are three basic selling fees: a listing fee, a transaction fee, and a payment processing fee.</p>
                  <p>It costs USD 0.20 to publish a listing to the marketplace. A listing lasts for four months or until the item is sold. Once an item sells, there is a 3.5% transaction fee on the sale price (not including shipping costs). If you accept payments with PayPal, there is also a payment processing fee based on their fee structure.</p>
                  <p>Listing fees are billed for $0.20 USD, so if your bank’s currency is not USD, the amount may differ based on changes in the exchange rate.</p>
                </figure>
                <figure>
                  <figcaption>What do I need to do to create a shop?</figcaption>
                  <p>It’s easy to set up a shop on Martfury. Create an Martfury account (if you don’t already have one), set your shop location and currency, choose a shop name, create a listing, set a payment method (how you want to be paid), and finally set a billing method (how you want to pay your Martfuryfees).</p>
                </figure>
              </div>
              <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                <figure>
                  <figcaption>How do I get paid?</figcaption>
                  <p>If you accept payments with PayPal, funds from PayPal sales on Martfury will be deposited into your PayPal account. We encourage sellers to use a PayPal Business account and not a Personal account, as personal accounts are subject to monthly receiving limits and cannot accept payments from buyers that are funded by a credit card.</p>
                  <p>It costs USD 0.20 to publish a listing to the marketplace. A listing lasts for four months or until the item is sold. Once an item sells, there is a 3.5% transaction fee on the sale price (not including shipping costs). If you accept payments with PayPal, there is also a payment processing fee based on their fee structure.</p>
                  <p>Listing fees are billed for $0.20 USD, so if your bank’s currency is not USD, the amount may differ based on changes in the exchange rate.</p>
                </figure>
                <figure>
                  <figcaption>Do I need a credit or debit card to create a shop?</figcaption>
                  <p>No, a credit or debit card is not required to create a shop. To be verified as a seller you have the choice to use either a credit card or to register via PayPal. You will not incur any charges until you open your shop and publish your listings.</p>
                </figure>
                <figure>
                  <figcaption>What can I sell on Martfury?</figcaption>
                </figure>
                <p>Martfury provides a marketplace for crafters, artists and collectors to sell their handmade creations, vintage goods (at least 20 years old), and both handmade and non-handmade crafting supplies.</p>
              </div>
            </div>
          </div>
          <div class="ps-section__footer">
            <p>Still have more questions? Feel free to contact us.</p><a class="ps-btn" href="#">Contact Us</a>
          </div>
        </div>
      </div> -->
      <!-- <div class="ps-vendor-banner bg--cover" data-background="img/bg/vendor.jpg">
        <div class="container">
          <h2>It's time to start making money.</h2><a class="ps-btn ps-btn--lg" href="#">Start Selling</a>
        </div>
      </div> -->
    </div>
    <footer class="ps-footer ps-footer--2">
      <div class="container">
        <div class="ps-footer__content">
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
              <aside class="widget widget_footer">
                <h4 class="widget-title">Quick links</h4>
                <ul class="ps-list--link">
                  <li><a href="<?php echo base_url().'index.php/home/vendor'?>">Sellers</a></li>
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
        $scope.flag = false; $scope.passflag = false;
        $scope.ngAlertTopic = 'Alert';
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
                    phone: $('#phone').val(),
                    birthday: $('#birthday').val(),
                    gender: $('#gender').val(),
                    password: pass
            };
                $http.post(base_url + 'index.php/ARegister',JSON.stringify(data)).then(function (response){
                      location.assign(base_url + 'index.php/vendor');
                });
              }
        }
    });
</script>
</body>
</html>