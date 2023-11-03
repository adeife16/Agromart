    <footer class="ps-footer">
        <div class="container">
            <div class="ps-footer--contact">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <p class="contact__title">Contact Us</p>
                        <p class="telephone">+23481 234 567 8900</p>
                        <p> <b>Address: </b>Private Mail Bag 50, The Federal Polytechnic, Ilaro, Oja Odan Road, Ogun State.</p>
                        <p> <b>Email us: </b>info@federalpolyilaro.edu.ng</p>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <p class="contact__title">Help &amp; Info<span class="footer-toggle"><i class="icon-chevron-down"></i></span></p>
                                <ul class="footer-list">
                                    <li><a href="http://nouthemes.net/html/farmart/index.html#">About Us</a></li>
                                    <li><a href="http://nouthemes.net/html/farmart/index.html#">Contact</a></li>
                                    <li><a href="http://nouthemes.net/html/farmart/index.html#">Sore Locations</a></li>
                                    <li><a href="http://nouthemes.net/html/farmart/index.html#">Terms of Use</a></li>
                                    <li><a href="http://nouthemes.net/html/farmart/index.html#">Policy</a></li>
                                    <li><a href="http://nouthemes.net/html/farmart/index.html#">Flash Sale</a></li>
                                    <li><a href="http://nouthemes.net/html/farmart/index.html#">FAQs</a></li>
                                </ul>
                                <hr>
                            </div>
                            <div class="col-12 col-lg-6">
                                <p class="contact__title">Corporate<span class="footer-toggle"><i class="icon-chevron-down"></i></span></p>
                                <ul class="footer-list">
                                    <li><a href="http://nouthemes.net/html/farmart/index.html#">Become a Vendor</a></li>
                                    <li><a href="http://nouthemes.net/html/farmart/index.html#">Affiliate Program</a></li>
                                    <li><a href="http://nouthemes.net/html/farmart/index.html#">Farm Business</a></li>
                                    <li><a href="http://nouthemes.net/html/farmart/index.html#">Careers</a></li>
                                    <li><a href="http://nouthemes.net/html/farmart/index.html#">Our Suppliers</a></li>
                                    <li><a href="http://nouthemes.net/html/farmart/index.html#">Accessibility</a></li>
                                </ul>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <p class="contact__title">Newsletter Subscription</p>
                        <p>Join our email subscription now to get updates on <b>promotions </b>and <b>coupons.</b></p>
                        <div class="input-group">
                            <div class="input-group-prepend"><i class="icon-envelope"></i></div>
                            <input class="form-control" type="text" placeholder="Enter your email...">
                            <div class="input-group-append">
                                <button class="btn">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ps-footer__copyright">
                <div class="col-12 col-lg-6 ps-footer__text">© <?php echo date('Y'); ?> FPI AGRO E-MART. All Rights Reversed.</div>
                <div class="col-12 col-lg-6 ps-footer__social"> <a class="icon_social facebook" href="http://nouthemes.net/html/farmart/index.html#"><i class="fa fa-facebook-f"></i></a><a class="icon_social twitter" href="http://nouthemes.net/html/farmart/index.html#"><i class="fa fa-twitter"></i></a><a class="icon_social google" href="http://nouthemes.net/html/farmart/index.html#"><i class="fa fa-google-plus"></i></a><a class="icon_social youtube" href="http://nouthemes.net/html/farmart/index.html#"><i class="fa fa-youtube"></i></a><a class="icon_social wifi" href="http://nouthemes.net/html/farmart/index.html#"><i class="fa fa-wifi"></i></a></div>
            </div>
        </div>
    </footer>

    <div class="ps-footer-mobile">
        <div class="menu__content">
            <ul class="menu--footer">
                <li class="nav-item"><a class="nav-link" href="<?php echo $web_link. "index" ?>"><i class="icon-home3"></i><span>Home</span></a></li>
                <li class="nav-item"><a class="nav-link footer-category" href="javascript:void(0);"><i class="icon-list"></i><span>Category</span></a></li>
                <li class="nav-item"><a class="nav-link footer-cart" href="#" data-toggle="modal" data-target="#exampleModal"><i class="icon-cart"></i><span class="badge bg-warning" id="cart-count-mobile"></span><span>Cart</span></a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo $web_link. "wishlist" ?>"><i class="icon-heart"></i><span>Wishlist</span></a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo $web_link. "account" ?>"><i class="icon-user"></i><span>Account</span></a></li>
            </ul>
        </div>
    </div>
    <button class="btn scroll-top" style="display: none;"><i class="icon-chevron-up"></i></button>
    <div class="ps-preloader deactive" id="preloader">
        <div class="ps-preloader-section ps-preloader-left"></div>
        <div class="ps-preloader-section ps-preloader-right"></div>
    </div>
    <div class="ps-category--mobile">
        <div class="category__header">
            <div class="category__title">Product Category</div><span class="category__close"><i class="icon-cross"></i></span>
        </div>
        <div class="category__content">
            <ul class="menu--mobile" id="nav-cat-mobile-sidebar">
            </ul>
        </div>
    </div>
    <nav class="navigation--mobile">
        <div class="navigation__header">
            <div class="navigation-title">
                <button class="close-navbar-slide"><i class="icon-arrow-left"></i></button>
                        
                <div>
                    <?php if (!isset($_SESSION['user_id'])){?>
                        <a class="dropdown-user" href="#" id="dropdownAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-enter-right text-white fa-lg"></i>Login/Signup
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownAccount">
                            <a class="dropdown-item" href="<?php echo $web_link. "login" ?>">Login</a>
                            <a class="dropdown-item" href="<?php echo $web_link. "signup" ?>">Signup</a>
                        </div>
                    
                    <?php } else{ ?>
                        <a class="dropdown-user" href="#" id="dropdownAccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-user text-white"></i><span class="font-bold text-white">Hi! <?php echo $_SESSION['name']; ?></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownAccount">
                                <a class="dropdown-item" href="<?php echo $web_link. "account" ?>">Account Settings</a>
                                <a class="dropdown-item" href="<?php echo $web_link. "order" ?>">Orders</a>
                                <a class="dropdown-item" href="<?php echo $web_link. "wishlist" ?>">Wishlist</a>
                                <a class="dropdown-item" href="<?php echo $web_link. "logout" ?>"><i class="icon-exit-left"></i>Log out</a></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="navigation__content">
            <ul class="menu--mobile">
                <li class="menu-item-has-children">
                    <a href="<?php echo $web_link. "index" ?>">Home</a>
                </li>

                <li class="menu-item-has-children">
                    <a href="#">Product Category</a><span class="sub-toggle"><i class="icon-chevron-down"></i></span>
                    <ul class="sub-menu" id="nav-cat-mobile">

                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a class="nav-link" href="<?php echo $web_link. "products"; ?>">All Products</a>
                </li>

                <li class="menu-item-has-children">
                    <a class="nav-link" href="<?php echo $web_link. "about" ?>">About</a>
                </li>

                <li class="menu-item-has-children">
                    <a class="nav-link" href="<?php echo $web_link. "contact" ?>">Contact</a>
                </li>
            </ul>
        </div>
<!--         <div class="navigation__footer">
            <ul class="menu--icon">
                <li class="footer-item"><a class="footer-link" href="http://nouthemes.net/html/farmart/index.html#"><i class="icon-history2"></i><span>Recent viewed product</span></a></li>
                <li class="footer-item"><a class="footer-link" href="http://nouthemes.net/html/farmart/index.html#"><i class="icon-cube"></i><span>Become a vendor</span></a></li>
                <li class="footer-item"><a class="footer-link" href="http://nouthemes.net/html/farmart/index.html#"><i class="icon-question-circle"></i><span>Help &amp; Contact</span></a></li>
                <li class="footer-item"><a class="footer-link" href="http://nouthemes.net/html/farmart/index.html#"><i class="icon-telephone"></i><span>HOTLINE: <span class="text-success">(+1) 970 978-6290</span> (Free)</span></a></li>
            </ul>
        </div> -->
    </nav>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ul id="cart-list-mobile">
            
        </ul>
      </div>
      <div class="modal-footer">
        <div class="title text-left">TOTAL <span class="total text-success" id="cart-total-mobile"></span></div>
        
        <a class="checkout btn btn-success" href="<?php echo $web_link. "checkout" ?>">Checkout</a>
      </div>
    </div>
  </div>
</div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.matchHeight-min.js"></script>
    <script src="assets/js/jquery.barrating.min.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightgallery-all.min.js"></script>
    <script src="assets/js/nouislider.min.js"></script>
    <script src="assets/js/toastr.min.js"></script>
    <script src="assets/js/main.js"></script>

    
    <!-- custom code-->
    <script type="text/javascript" src="scripts/global.js"></script>
    <script type="text/javascript" src="ajax/cart.js"></script>
    <script type="text/javascript" src="scripts/cart.js"></script>

    <?php if ($title == "Signup"): ?>
        <link rel="stylesheet" type="text/css" href="assets/css/image-upload.css">
        <script type="text/javascript" src="assets/js/image-upload.js"></script>
        <script type="text/javascript" src="ajax/signup.js"></script>
        <script type="text/javascript" src="scripts/signup.js"></script>
    <?php endif ?>

    <?php if ($title == "Login"): ?>
        <script type="text/javascript" src="ajax/login.js"></script>
        <script type="text/javascript" src="scripts/login.js"></script>
    <?php endif ?>

    <?php if ($title == "Account"): ?>
        <link rel="stylesheet" type="text/css" href="assets/css/image-upload.css">
        <script type="text/javascript" src="assets/js/image-upload.js"></script>
        <script type="text/javascript" src="ajax/account.js"></script>
        <script type="text/javascript" src="scripts/account.js"></script>
    <?php endif ?>

    <?php if ($title == "Home"): ?>
        <script type="text/javascript" src="ajax/home.js"></script>
        <script type="text/javascript" src="scripts/home.js"></script>
    <?php endif ?>

    <?php if ($title == "Product"): ?>
        <script type="text/javascript" src="ajax/product.js"></script>
        <script type="text/javascript" src="scripts/product.js"></script>
    <?php endif ?>

    <?php if ($title == "Checkout"): ?>
        <script src="https://js.paystack.co/v1/inline.js"></script>
        <script type="text/javascript" src="ajax/checkout.js"></script>
        <script type="text/javascript" src="scripts/checkout.js"></script>
    <?php endif ?>

    <?php if ($title == "Products"): ?>
        <script type="text/javascript" src="ajax/products.js"></script>
        <script type="text/javascript" src="scripts/products.js"></script>
    <?php endif ?>
</body>
</html>