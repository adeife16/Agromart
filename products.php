<?php 
    $title = "Products";
    require_once 'header.php';
?>
    <main class="no-main">
    	<h1 class="cat"></h1>
        <section class="section--flashSale">
            <div class="container">
                <div class="flashSale__product pt-4 pb-4">
                    <div class="row m-0" id="prodata">
                        
                    </div>
                </div>
            </div>
        </section>
        <div class="modal fade" id="popupQuickview" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl ps-quickview">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid quickview-body">
                            <div class="row">
                                <div class="col-12 col-lg-5">
                                    <div class="owl-carousel owl-loaded owl-drag" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-item-xl="1" data-owl-duration="1000" data-owl-mousedrag="on">
                                        
                                        
                                        
                                        
                                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;"><div class="owl-item"><div class="quickview-carousel"><img class="carousel__thumbnail" src="assets/images/01_1a.jpg" alt="alt"></div></div><div class="owl-item"><div class="quickview-carousel"><img class="carousel__thumbnail" src="assets/images/01_2a.jpg" alt="alt"></div></div><div class="owl-item"><div class="quickview-carousel"><img class="carousel__thumbnail" src="assets/images/01_4a.jpg" alt="alt"></div></div><div class="owl-item"><div class="quickview-carousel"><img class="carousel__thumbnail" src="assets/images/01_9a.jpg" alt="alt"></div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="icon-chevron-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="icon-chevron-right"></i></button></div><div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
                                </div>
                                <div class="col-12 col-lg-7">
                                    <div class="quickview__product">
                                        <div class="product__header">
                                            <div class="product__title">Hovis Farmhouse Soft White Bread</div>
                                            <div class="product__meta">
                                                <div class="product__rating">
                                                    <div class="br-wrapper br-theme-fontawesome-stars"><select class="rating-stars" style="display: none;">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4" selected="selected">4</option>
                                                        <option value="5">5</option>
                                                    </select><div class="br-widget"><a href="http://www.nouthemes.net/html/farmart/flash-sale.html#" data-rating-value="1" data-rating-text="1" class="br-selected"></a><a href="http://www.nouthemes.net/html/farmart/flash-sale.html#" data-rating-value="2" data-rating-text="2" class="br-selected"></a><a href="http://www.nouthemes.net/html/farmart/flash-sale.html#" data-rating-value="3" data-rating-text="3" class="br-selected"></a><a href="http://www.nouthemes.net/html/farmart/flash-sale.html#" data-rating-value="4" data-rating-text="4" class="br-selected br-current"></a><a href="http://www.nouthemes.net/html/farmart/flash-sale.html#" data-rating-value="5" data-rating-text="5"></a><div class="br-current-rating">4</div></div></div><span>4 customer reviews</span>
                                                </div>
                                                <div class="product__code"><span>SKU: </span>#VEG20938</div>
                                            </div>
                                        </div>
                                        <div class="product__content">
                                            <div class="product__price"><span class="sale">$5.49</span><span class="price">$6.90</span><span class="off">25% Off</span></div>
                                            <p class="product__unit">300g</p>
                                            <div class="alert__success">Availability: <span>34 in stock</span></div>
                                            <ul>
                                                <li>Type: Organic</li>
                                                <li>MFG: Jun 4, 2020</li>
                                                <li>LIFE: 30 days</li>
                                            </ul>
                                        </div>
                                        <div class="product__action">
                                            <label>Quantity: </label>
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" onclick="this.parentNode.querySelector(&#39;input[type=number]&#39;).stepDown()"><i class="icon-minus"></i></button>
                                                <input class="quantity" min="0" name="quantity" value="1" type="number">
                                                <button class="plus" onclick="this.parentNode.querySelector(&#39;input[type=number]&#39;).stepUp()"><i class="icon-plus"></i></button>
                                            </div>
                                            <button class="btn product__addcart"> <i class="icon-cart"></i>Add to cart</button>
                                            <button class="btn button-icon icon-md"><i class="icon-repeat"></i></button>
                                            <button class="btn button-icon icon-md"><i class="icon-heart"></i></button>
                                        </div>
                                        <div class="product__footer">
                                            <div class="ps-social--share"><a class="ps-social__icon facebook" href="http://www.nouthemes.net/html/farmart/flash-sale.html#"><i class="fa fa-thumbs-up"></i><span>Like</span><span class="ps-social__number">0</span></a><a class="ps-social__icon facebook" href="http://www.nouthemes.net/html/farmart/flash-sale.html#"><i class="fa fa-facebook-square"></i><span>Like</span><span class="ps-social__number">0</span></a><a class="ps-social__icon twitter" href="http://www.nouthemes.net/html/farmart/flash-sale.html#"><i class="fa fa-twitter"></i><span>Like</span></a><a class="ps-social__icon" href="http://www.nouthemes.net/html/farmart/flash-sale.html#"><i class="fa fa-plus-square"></i><span>Like</span></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="popupAddToCart" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl ps-addcart">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="alert__success"><i class="icon-checkmark-circle"></i> "Morrisons The Best Beef Topside" successfully added to you cart. <a href="http://www.nouthemes.net/html/farmart/shopping-cart.html">View cart(3)</a></div>
                            <hr>
                            <h3 class="cart__title">CUSTOMERS WHO BOUGHT THIS ALSO BOUGHT:</h3>
                            <div class="cart__content">
                                <div class="owl-carousel owl-loaded owl-drag" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="4" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="2" data-owl-item-lg="4" data-owl-item-xl="4" data-owl-duration="1000" data-owl-mousedrag="on">
                                    
                                    
                                    
                                    
                                    
                                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;"><div class="owl-item"><div class="cart-item">
                                        <div class="ps-product--standard"><a href="http://www.nouthemes.net/html/farmart/product-default.html"><img class="ps-product__thumbnail" src="assets/images/01_35a.jpg" alt="alt"></a>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type"><i class="icon-store"></i>Farmart</p><a href="http://www.nouthemes.net/html/farmart/product-default.html">
                                                    <h5 class="ps-product__name">Extreme Budweiser Light Can</h5>
                                                </a>
                                                <p class="ps-product__unit">500g</p>
                                                <div class="ps-product__rating">
                                                    <div class="br-wrapper br-theme-fontawesome-stars"><select class="rating-stars" style="display: none;">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4" selected="selected">4</option>
                                                        <option value="5">5</option>
                                                    </select><div class="br-widget"><a href="http://www.nouthemes.net/html/farmart/flash-sale.html#" data-rating-value="1" data-rating-text="1" class="br-selected"></a><a href="http://www.nouthemes.net/html/farmart/flash-sale.html#" data-rating-value="2" data-rating-text="2" class="br-selected"></a><a href="http://www.nouthemes.net/html/farmart/flash-sale.html#" data-rating-value="3" data-rating-text="3" class="br-selected"></a><a href="http://www.nouthemes.net/html/farmart/flash-sale.html#" data-rating-value="4" data-rating-text="4" class="br-selected br-current"></a><a href="http://www.nouthemes.net/html/farmart/flash-sale.html#" data-rating-value="5" data-rating-text="5"></a><div class="br-current-rating">4</div></div></div><span>(4)</span>
                                                </div>
                                                <p class="ps-product-price-block"><span class="ps-product__sale">$8.90</span><span class="ps-product__price">$9.90</span><span class="ps-product__off">15% Off</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div></div><div class="owl-item"><div class="cart-item">
                                        <div class="ps-product--standard"><a href="http://www.nouthemes.net/html/farmart/product-default.html"><img class="ps-product__thumbnail" src="assets/images/01_16a.jpg" alt="alt"></a>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type"><i class="icon-store"></i>Karery Store</p><a href="http://www.nouthemes.net/html/farmart/product-default.html">
                                                    <h5 class="ps-product__name">Honest Organic Still Lemonade</h5>
                                                </a>
                                                <p class="ps-product__unit">100g</p>
                                                <div class="ps-product__rating">
                                                    <div class="br-wrapper br-theme-fontawesome-stars"><select class="rating-stars" style="display: none;">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5" selected="selected">5</option>
                                                    </select><div class="br-widget"><a href="http://www.nouthemes.net/html/farmart/flash-sale.html#" data-rating-value="1" data-rating-text="1" class="br-selected"></a><a href="http://www.nouthemes.net/html/farmart/flash-sale.html#" data-rating-value="2" data-rating-text="2" class="br-selected"></a><a href="http://www.nouthemes.net/html/farmart/flash-sale.html#" data-rating-value="3" data-rating-text="3" class="br-selected"></a><a href="http://www.nouthemes.net/html/farmart/flash-sale.html#" data-rating-value="4" data-rating-text="4" class="br-selected"></a><a href="http://www.nouthemes.net/html/farmart/flash-sale.html#" data-rating-value="5" data-rating-text="5" class="br-selected br-current"></a><div class="br-current-rating">5</div></div></div><span>(14)</span>
                                                </div>
                                                <p class="ps-product-price-block"><span class="ps-product__price-default">$1.99</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div></div><div class="owl-item"><div class="cart-item">
                                        <div class="ps-product--standard"><a href="http://www.nouthemes.net/html/farmart/product-default.html"><img class="ps-product__thumbnail" src="assets/images/01_12a.jpg" alt="alt"></a>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type"><i class="icon-store"></i>John Farm</p><a href="http://www.nouthemes.net/html/farmart/product-default.html">
                                                    <h5 class="ps-product__name">Natures Own 100% Wheat</h5>
                                                </a>
                                                <p class="ps-product__unit">100g</p>
                                                <div class="ps-product__rating">
                                                    <div class="br-wrapper br-theme-fontawesome-stars"><select class="rating-stars" style="display: none;">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select><div class="br-widget"><a href="http://www.nouthemes.net/html/farmart/flash-sale.html#" data-rating-value="1" data-rating-text="1" class="br-selected br-current"></a><a href="http://www.nouthemes.net/html/farmart/flash-sale.html#" data-rating-value="2" data-rating-text="2"></a><a href="http://www.nouthemes.net/html/farmart/flash-sale.html#" data-rating-value="3" data-rating-text="3"></a><a href="http://www.nouthemes.net/html/farmart/flash-sale.html#" data-rating-value="4" data-rating-text="4"></a><a href="http://www.nouthemes.net/html/farmart/flash-sale.html#" data-rating-value="5" data-rating-text="5"></a><div class="br-current-rating">1</div></div></div><span>(0)</span>
                                                </div>
                                                <p class="ps-product-price-block"><span class="ps-product__price-default">$4.49</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div></div><div class="owl-item"><div class="cart-item">
                                        <div class="ps-product--standard"><a href="http://www.nouthemes.net/html/farmart/product-default.html"><img class="ps-product__thumbnail" src="assets/images/01_15a.jpg" alt="alt"></a>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type"><i class="icon-store"></i>Farmart</p><a href="http://www.nouthemes.net/html/farmart/product-default.html">
                                                    <h5 class="ps-product__name">Avocado, Hass Large</h5>
                                                </a>
                                                <p class="ps-product__unit">300g</p>
                                                <div class="ps-product__rating">
                                                    <div class="br-wrapper br-theme-fontawesome-stars"><select class="rating-stars" style="display: none;">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3" selected="selected">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select><div class="br-widget"><a href="http://www.nouthemes.net/html/farmart/flash-sale.html#" data-rating-value="1" data-rating-text="1" class="br-selected"></a><a href="http://www.nouthemes.net/html/farmart/flash-sale.html#" data-rating-value="2" data-rating-text="2" class="br-selected"></a><a href="http://www.nouthemes.net/html/farmart/flash-sale.html#" data-rating-value="3" data-rating-text="3" class="br-selected br-current"></a><a href="http://www.nouthemes.net/html/farmart/flash-sale.html#" data-rating-value="4" data-rating-text="4"></a><a href="http://www.nouthemes.net/html/farmart/flash-sale.html#" data-rating-value="5" data-rating-text="5"></a><div class="br-current-rating">3</div></div></div><span>(6)</span>
                                                </div>
                                                <p class="ps-product-price-block"><span class="ps-product__sale">$6.99</span><span class="ps-product__price">$9.90</span><span class="ps-product__off">25% Off</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div></div><div class="owl-item"><div class="cart-item">
                                        <div class="ps-product--standard"><a href="http://www.nouthemes.net/html/farmart/product-default.html"><img class="ps-product__thumbnail" src="assets/images/06_3a.jpg" alt="alt"></a>
                                            <div class="ps-product__content">
                                                <p class="ps-product__type"><i class="icon-store"></i>Sun Farm</p><a href="http://www.nouthemes.net/html/farmart/product-default.html">
                                                    <h5 class="ps-product__name">Kevita Kom Ginger</h5>
                                                </a>
                                                <p class="ps-product__unit">200g</p>
                                                <div class="ps-product__rating">
                                                    <div class="br-wrapper br-theme-fontawesome-stars"><select class="rating-stars" style="display: none;">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4" selected="selected">4</option>
                                                        <option value="5">5</option>
                                                    </select><div class="br-widget"><a href="http://www.nouthemes.net/html/farmart/flash-sale.html#" data-rating-value="1" data-rating-text="1" class="br-selected"></a><a href="http://www.nouthemes.net/html/farmart/flash-sale.html#" data-rating-value="2" data-rating-text="2" class="br-selected"></a><a href="http://www.nouthemes.net/html/farmart/flash-sale.html#" data-rating-value="3" data-rating-text="3" class="br-selected"></a><a href="http://www.nouthemes.net/html/farmart/flash-sale.html#" data-rating-value="4" data-rating-text="4" class="br-selected br-current"></a><a href="http://www.nouthemes.net/html/farmart/flash-sale.html#" data-rating-value="5" data-rating-text="5"></a><div class="br-current-rating">4</div></div></div><span>(6)</span>
                                                </div>
                                                <p class="ps-product-price-block"><span class="ps-product__sale">$4.90</span><span class="ps-product__price">$3.99</span><span class="ps-product__off">15% Off</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i class="icon-chevron-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="icon-chevron-right"></i></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php 
	require_once 'footer.php';
?>