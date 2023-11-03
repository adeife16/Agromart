<?php 
	session_start();
	ob_start();
	include_once 'config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="format-detection" content="telephone=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link href="" rel="apple-touch-icon">
        <link href="" rel="icon">
        <meta name="author" content="">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <title><?php echo $title; ?></title>
        <!-- <link href="asset/css/css" rel="stylesheet"> -->

        <link rel="stylesheet" href="assets/css/demo.css">
        <link rel="stylesheet" href="assets/css/nouislider.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/fontawesome-stars.css">
        <link rel="stylesheet" href="assets/css/select2.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/lightgallery.min.css">
        <link rel="stylesheet" href="assets/css/toastr.css">
        <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header class="header">
        <nav class="navigation">
            <div class="container-fluid">
	            <ul class="menu text-left">
	                <li class="nav-top-item">
	                	<i class="fa fa-facebook text-white"></i>
	                </li>
	                <li class="nav-top-item">
	                	<i class="fa fa-google text-white"></i>
	                </li>
	                <li class="nav-top-item">
	                	<i class="fa fa-instagram text-white"></i>
	                </li>
	                <li class="nav-top-item">
	                	<i class="fa fa-twitter text-white"></i>
	                </li>
	            </ul>
            	<div>
	                <ul class="menu">
	                    <li class="menu-item-has-children has-mega-menu active">
	                    	<a class="nav-link active" href="<?php echo $web_link. "index" ?>">Home</a>
	                    </li>
	                    <li class="menu-item-has-children has-mega-menu"><a class="nav-link" href="javascript:void(0);">Product Category</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
	                        <div class="mega-menu mega-shop">
	                            <div class="mega-anchor"></div>
	                            <div class="mega-menu__column">
	                                <ul class="sub-menu--mega" id="nav-cat">

	                                </ul>
	                            </div>
	                        </div>
	                    </li>
	                    <li class="menu-item-has-children has-mega-menu">
	                    	<a class="nav-link" href="<?php echo $web_link. "products"; ?>">All Products</a>
	                    </li>
	                    <li class="menu-item-has-children has-mega-menu">
	                    	<a class="nav-link" href="<?php echo $web_link. "about" ?>">About</a>
	                    </li>
	                    <li class="menu-item-has-children has-mega-menu menu-item-branch">		<a class="nav-link" href="<?php echo $web_link. "contact" ?>">Contact</a>
	                    </li>
	                </ul>
            	</div>
            		<ul class="menu text-right" style="margin-right: 30px!important;">
            			<?php if (!isset($_SESSION['user_id'])){?>
		                    <li class="menu-item-has-children has-mega-menu">
		                    	<a class="nav-link" href="javascript:void(0);">
		                    		<i class="icon-enter-right text-white fa-lg"></i>Login/Signup
		                    	</a>
		                        <div class="mega-menu">
		                            <div class="mega-anchor"></div>
		                            <div class="mega-menu__column">
		                                <h4>My Account<span class="sub-toggle"></span></h4>
		                                <ul class="sub-menu--mega text-left">
		                                    <li ><a href="<?php echo $web_link. "login" ?>">Login</a></li>
		                                    <li><a href="<?php echo $web_link. "signup" ?>">Signup</a></li>
		                                </ul>

		                            </div>
		                        </div>
		                    </li>
            			<?php } else{?>
	 	                    <li class="menu-item-has-children has-mega-menu"><a class="nav-link" href="javascript:void(0);"><i class="icon-user text-white"></i>Hi! <span class="font-bold text-white"><?php echo $_SESSION['name']; ?></span></a>
		                        <div class="mega-menu">
		                            <div class="mega-anchor"></div>
		                            <div class="mega-menu__column">
		                                <h4>My Account<span class="sub-toggle"></span></h4>
		                                <ul class="sub-menu--mega text-left">
		                                    <li >
		                                    	<a href="<?php echo $web_link. "account" ?>">Account Settings</a>
		                                    </li>
		                                    <li>
		                                    	<a href="<?php echo $web_link. "order" ?>">Orders</a>
		                                    </li>
		                                    <li>
		                                    	<a href="<?php echo $web_link. "wishlist" ?>">Wishlist</a>
		                                    </li>
		                                    <hr>
	                                    	<li>
	                                    		<a href="<?php echo $web_link. "logout" ?>"><i class="icon-exit-left text-success" style="font-size: 14px !important;"></i>Log out</a>
	                                    	</li>
		                                </ul>
		                            </div>
		                        </div>
		                    </li>
            		<?php } ?>


            		</ul>
            </div>
        </nav>
        <div class="ps-header--center header--mobile">
            <div class="container">
                <div class="header-inner">
                    <div class="header-inner__left">
                        <button class="navbar-toggler"><i class="icon-menu"></i></button>
                    </div>
                    <div class="header-inner__center"><a class="logo open" href="<?php echo $web_link. "index" ?>">FPI AGRO<span class="text-success">E-MART</span></a></div>
                    <div class="header-inner__right">
                        <button class="button-icon icon-sm search-mobile"><i class="icon-magnifier"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <section class="ps-header--center header-desktop">
            <div class="container">
                <div class="header-inner">
                    <div class="header-inner__left"><a class="logo" href="<?php echo $web_link. "index"; ?>">FPI AGRO<span class="text-success">E-MART</span></a>

                    </div>
                    <div class="header-inner__center">
                        <div class="input-group">
                            <input class="form-control input-search" placeholder="Search Products">
                            <div class="input-group-append">
                                <button class="btn">Search</button>
                            </div>
                        </div>
                        <!-- Search Results -->
                        <div class="result-search">
         <!--                    <ul class="list-result">
                                <li class="cart-item">
                                    <div class="ps-product--mini-cart"><a href="http://nouthemes.net/html/farmart/product-default.html"><img class="ps-product__thumbnail" src="assets/images/01_18a.jpg" alt="alt"></a>
                                        <div class="ps-product__content"><a class="ps-product__name" href="http://nouthemes.net/html/farmart/product-default.html"><u>Organic</u> Large Green Bell Pepper</a>
                                            <p class="ps-product__rating">
                                                <div class="br-wrapper br-theme-fontawesome-stars"><select class="rating-stars" style="display: none;">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3" selected="selected">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select><div class="br-widget"><a href="http://nouthemes.net/html/farmart/index.html#" data-rating-value="1" data-rating-text="1" class="br-selected"></a><a href="http://nouthemes.net/html/farmart/index.html#" data-rating-value="2" data-rating-text="2" class="br-selected"></a><a href="http://nouthemes.net/html/farmart/index.html#" data-rating-value="3" data-rating-text="3" class="br-selected br-current"></a><a href="http://nouthemes.net/html/farmart/index.html#" data-rating-value="4" data-rating-text="4"></a><a href="http://nouthemes.net/html/farmart/index.html#" data-rating-value="5" data-rating-text="5"></a><div class="br-current-rating">3</div></div></div><span>(5)</span>
                                            </p>
                                            <p class="ps-product__meta"> <span class="ps-product__price">$6.90</span>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="cart-item">
                                    <div class="ps-product--mini-cart"><a href="http://nouthemes.net/html/farmart/product-default.html"><img class="ps-product__thumbnail" src="assets/images/01_16a.jpg" alt="alt"></a>
                                        <div class="ps-product__content"><a class="ps-product__name" href="http://nouthemes.net/html/farmart/product-default.html">Avocado <u>Organic</u> Hass Large</a>
                                            <p class="ps-product__meta"> <span class="ps-product__price">$12.90</span>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="cart-item">
                                    <div class="ps-product--mini-cart"><a href="http://nouthemes.net/html/farmart/product-default.html"><img class="ps-product__thumbnail" src="assets/images/01_32a.jpg" alt="alt"></a>
                                        <div class="ps-product__content"><a class="ps-product__name" href="http://nouthemes.net/html/farmart/product-default.html">Tailgater Ham <u>Organic</u> Sandwich</a>
                                            <p class="ps-product__meta"> <span class="ps-product__price">$33.49</span>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="cart-item">
                                    <div class="ps-product--mini-cart"><a href="http://nouthemes.net/html/farmart/product-default.html"><img class="ps-product__thumbnail" src="assets/images/01_6a.jpg" alt="alt"></a>
                                        <div class="ps-product__content"><a class="ps-product__name" href="http://nouthemes.net/html/farmart/product-default.html">Extreme <u>Organic</u> Light Can</a>
                                            <p class="ps-product__rating">
                                                <div class="br-wrapper br-theme-fontawesome-stars"><select class="rating-stars" style="display: none;">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4" selected="selected">4</option>
                                                    <option value="5">5</option>
                                                </select><div class="br-widget"><a href="http://nouthemes.net/html/farmart/index.html#" data-rating-value="1" data-rating-text="1" class="br-selected"></a><a href="http://nouthemes.net/html/farmart/index.html#" data-rating-value="2" data-rating-text="2" class="br-selected"></a><a href="http://nouthemes.net/html/farmart/index.html#" data-rating-value="3" data-rating-text="3" class="br-selected"></a><a href="http://nouthemes.net/html/farmart/index.html#" data-rating-value="4" data-rating-text="4" class="br-selected br-current"></a><a href="http://nouthemes.net/html/farmart/index.html#" data-rating-value="5" data-rating-text="5"></a><div class="br-current-rating">4</div></div></div><span>(16)</span>
                                            </p>
                                            <p class="ps-product__meta"> <span class="ps-product__price-sale">$4.99</span><span class="ps-product__is-sale">$8.99</span>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="cart-item">
                                    <div class="ps-product--mini-cart"><a href="http://nouthemes.net/html/farmart/product-default.html"><img class="ps-product__thumbnail" src="assets/images/01_22a.jpg" alt="alt"></a>
                                        <div class="ps-product__content"><a class="ps-product__name" href="http://nouthemes.net/html/farmart/product-default.html">Extreme <u>Organic</u> Light Can</a>
                                            <p class="ps-product__meta"> <span class="ps-product__price">$12.99</span>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                    <div class="header-inner__right">
<!--                         <a class="button-icon icon-md" href="http://nouthemes.net/html/farmart/wishlist.html">
                        	<i class="icon-heart"></i><span class="badge bg-warning" id="wishlist-count">2</span>
                        </a> -->
                        <div class="button-icon btn-cart-header">
                        	<i class="icon-cart icon-shop5"></i><span class="badge bg-warning" id="cart-count"></span>
                            <div class="mini-cart">
                                <div class="mini-cart--content">
                                    <div class="mini-cart--overlay"></div>
                                    <div class="mini-cart--slidebar cart--box">
                                        <div class="mini-cart__header">
                                            <div class="cart-header-title">
                                                <h5>Shopping Cart(3)</h5><a class="close-cart" href="javascript:void(0);"><i class="icon-arrow-right"></i></a>
                                            </div>
                                        </div>
                                        <div class="mini-cart__products">
                                            <div class="out-box-cart">
                                                <div class="triangle-box">
                                                    <div class="triangle"></div>
                                                </div>
                                            </div>
                                            <ul class="list-cart" id="cart-list">
                                            </ul>
                                        </div>
                                        <div class="mini-cart__footer row">
                                            <div class="col-6 title">TOTAL</div>
                                            <div class="col-6 text-right total" id="cart-total"></div>
                                            <div class="col-12 d-flex">
                                            	<!-- <a class="view-cart" href="<?php echo $web_link. "cart" ?>">View cart</a> -->
                                            	<a class="checkout" href="<?php echo $web_link. "checkout" ?>">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="mobile-search--slidebar">
            <div class="mobile-search--content">
                <div class="mobile-search__header">
                    <div class="mobile-search-box">
                        <div class="input-group">
                            <input class="form-control" placeholder="I&#39;m shopping for..." id="inputSearchMobile">
                            <div class="input-group-append">
                                <button class="btn"> <i class="icon-magnifier"></i></button>
                            </div>
                        </div>
                        <button class="cancel-search"><i class="icon-cross"></i></button>
                    </div>
                </div>
                <div class="mobile-search__trendding">
                    <h5> <i class="icon-power"></i>Trending search</h5>
                    <div class="trending-content">
                        <ul class="mobile-list-trending">
                            <li class="title"><a>Trending search: </a></li>
                            <li class="trending-item"><a href="http://nouthemes.net/html/farmart/index.html#">meat</a></li>
                            <li class="trending-item"><a href="http://nouthemes.net/html/farmart/index.html#">fruit</a></li>
                            <li class="trending-item"><a href="http://nouthemes.net/html/farmart/index.html#">vegetables</a></li>
                            <li class="trending-item"><a href="http://nouthemes.net/html/farmart/index.html#">salad</a></li>
                            <li class="trending-item"><a href="http://nouthemes.net/html/farmart/index.html#">yoghurts</a></li>
                            <li class="trending-item"><a href="http://nouthemes.net/html/farmart/index.html#">apple</a></li>
                        </ul>
                    </div>
                </div>
                <div class="mobile-search__history">
                    <h5> <i class="icon-history2"></i>History<a href="javascript:void(0);">Clear all</a></h5>
                    <div class="history-content">
                        <ul class="history-list">
                            <li class="history-item"><a class="history-link" href="javascript:void(0);"> <span>apple</span><i class="icon-cross2"></i></a></li>
                            <li class="history-item"><a class="history-link" href="javascript:void(0);"> <span>organic fruit</span><i class="icon-cross2"></i></a></li>
                            <li class="history-item"><a class="history-link" href="javascript:void(0);"> <span>meat beef</span><i class="icon-cross2"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="mobile-search__result">
                    <h5> <span class="number-result">5</span>search result</h5>
                    <ul class="list-result">
                        <li class="cart-item">
                            <div class="ps-product--mini-cart"><a href="http://nouthemes.net/html/farmart/product-default.html"><img class="ps-product__thumbnail" src="assets/images/01_18a.jpg" alt="alt"></a>
                                <div class="ps-product__content"><a class="ps-product__name" href="http://nouthemes.net/html/farmart/product-default.html"><u>Organic</u> Large Green Bell Pepper</a>
                                    <p class="ps-product__rating">
                                        <div class="br-wrapper br-theme-fontawesome-stars"><select class="rating-stars" style="display: none;">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3" selected="selected">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select><div class="br-widget"><a href="http://nouthemes.net/html/farmart/index.html#" data-rating-value="1" data-rating-text="1" class="br-selected"></a><a href="http://nouthemes.net/html/farmart/index.html#" data-rating-value="2" data-rating-text="2" class="br-selected"></a><a href="http://nouthemes.net/html/farmart/index.html#" data-rating-value="3" data-rating-text="3" class="br-selected br-current"></a><a href="http://nouthemes.net/html/farmart/index.html#" data-rating-value="4" data-rating-text="4"></a><a href="http://nouthemes.net/html/farmart/index.html#" data-rating-value="5" data-rating-text="5"></a><div class="br-current-rating">3</div></div></div><span>(5)</span>
                                    </p>
                                    <p class="ps-product__meta"> <span class="ps-product__price">$6.90</span>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="cart-item">
                            <div class="ps-product--mini-cart"><a href="http://nouthemes.net/html/farmart/product-default.html"><img class="ps-product__thumbnail" src="assets/images/01_16a.jpg" alt="alt"></a>
                                <div class="ps-product__content"><a class="ps-product__name" href="http://nouthemes.net/html/farmart/product-default.html">Avocado <u>Organic</u> Hass Large</a>
                                    <p class="ps-product__meta"> <span class="ps-product__price">$12.90</span>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="cart-item">
                            <div class="ps-product--mini-cart"><a href="http://nouthemes.net/html/farmart/product-default.html"><img class="ps-product__thumbnail" src="assets/images/01_32a.jpg" alt="alt"></a>
                                <div class="ps-product__content"><a class="ps-product__name" href="http://nouthemes.net/html/farmart/product-default.html">Tailgater Ham <u>Organic</u> Sandwich</a>
                                    <p class="ps-product__meta"> <span class="ps-product__price">$33.49</span>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="cart-item">
                            <div class="ps-product--mini-cart"><a href="http://nouthemes.net/html/farmart/product-default.html"><img class="ps-product__thumbnail" src="assets/images/01_6a.jpg" alt="alt"></a>
                                <div class="ps-product__content"><a class="ps-product__name" href="http://nouthemes.net/html/farmart/product-default.html">Extreme <u>Organic</u> Light Can</a>
                                    <p class="ps-product__rating">
                                        <div class="br-wrapper br-theme-fontawesome-stars"><select class="rating-stars" style="display: none;">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4" selected="selected">4</option>
                                            <option value="5">5</option>
                                        </select><div class="br-widget"><a href="http://nouthemes.net/html/farmart/index.html#" data-rating-value="1" data-rating-text="1" class="br-selected"></a><a href="http://nouthemes.net/html/farmart/index.html#" data-rating-value="2" data-rating-text="2" class="br-selected"></a><a href="http://nouthemes.net/html/farmart/index.html#" data-rating-value="3" data-rating-text="3" class="br-selected"></a><a href="http://nouthemes.net/html/farmart/index.html#" data-rating-value="4" data-rating-text="4" class="br-selected br-current"></a><a href="http://nouthemes.net/html/farmart/index.html#" data-rating-value="5" data-rating-text="5"></a><div class="br-current-rating">4</div></div></div><span>(16)</span>
                                    </p>
                                    <p class="ps-product__meta"> <span class="ps-product__price-sale">$4.99</span><span class="ps-product__is-sale">$8.99</span>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="cart-item">
                            <div class="ps-product--mini-cart"><a href="http://nouthemes.net/html/farmart/product-default.html"><img class="ps-product__thumbnail" src="assets/images/01_22a.jpg" alt="alt"></a>
                                <div class="ps-product__content"><a class="ps-product__name" href="http://nouthemes.net/html/farmart/product-default.html">Extreme <u>Organic</u> Light Can</a>
                                    <p class="ps-product__meta"> <span class="ps-product__price">$12.99</span>
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>