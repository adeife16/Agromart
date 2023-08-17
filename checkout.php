<?php 
    $title = "Checkout";
    require_once 'header.php';
?>
<main class="no-main">
    <section class="section--checkout">
        <div class="container">
            <h2 class="page__title">Checkout</h2>
            <div class="checkout__content">
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <h3 class="checkout__title">Billing Details</h3>
                        <div class="checkout__form">
                            <form class="form" id="checkout" method="post" action="">
                                <div class="form-row">
                                    <div class="col-12 col-lg-6 form-group--block">
                                        <label>First name: <span>*</span></label>
                                        <input class="form-control" name="fname" id="fname" type="text" required="">
                                    </div>
                                    <div class="col-12 col-lg-6 form-group--block">
                                        <label>Last name<span>*</span></label>
                                        <input class="form-control" name="lname" id="lname" type="text" required="">
                                    </div>
                                    <div class="col-12 form-group--block">
                                        <label>State: <span>*</span></label>
                                        <select class="single-select2 select2-hidden-accessible" name="state" id="state" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                            <option value="" disabled selected>Select a state</option>
                                            <option value="Abia">Abia</option>
                                            <option value="Adamawa">Adamawa</option>
                                            <option value="Akwa Ibom">Akwa Ibom</option>
                                            <option value="Anambra">Anambra</option>
                                            <option value="Bauchi">Bauchi</option>
                                            <option value="Bayelsa">Bayelsa</option>
                                            <option value="Benue">Benue</option>
                                            <option value="Borno">Borno</option>
                                            <option value="Cross River">Cross River</option>
                                            <option value="Delta">Delta</option>
                                            <option value="Ebonyi">Ebonyi</option>
                                            <option value="Edo">Edo</option>
                                            <option value="Ekiti">Ekiti</option>
                                            <option value="Enugu">Enugu</option>
                                            <option value="Gombe">Gombe</option>
                                            <option value="Imo">Imo</option>
                                            <option value="Jigawa">Jigawa</option>
                                            <option value="Kaduna">Kaduna</option>
                                            <option value="Kano">Kano</option>
                                            <option value="Katsina">Katsina</option>
                                            <option value="Kebbi">Kebbi</option>
                                            <option value="Kogi">Kogi</option>
                                            <option value="Kwara">Kwara</option>
                                            <option value="Lagos">Lagos</option>
                                            <option value="Nassarawa">Nassarawa</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Ogun">Ogun</option>
                                            <option value="Ondo">Ondo</option>
                                            <option value="Osun">Osun</option>
                                            <option value="Oyo">Oyo</option>
                                            <option value="Plateau">Plateau</option>
                                            <option value="Rivers">Rivers</option>
                                            <option value="Sokoto">Sokoto</option>
                                            <option value="Taraba">Taraba</option>
                                            <option value="Yobe">Yobe</option>
                                            <option value="Zamfara">Zamfara</option>
                                        </select>
                                    </div>
                                    <div class="col-12 form-group--block">
                                        <label>Street address: <span>*</span></label>
                                        <input class="form-control" id="address" name="address" type="text" placeholder="House number and street name">
                                    </div>
                                    <div class="col-12 form-group--block">
                                        <label>Postcode/ ZIP (optional)</label>
                                        <input class="form-control" id="postal" name="postal" type="text">
                                    </div>
                                    <div class="col-12 form-group--block">
                                        <label>Town/ City: <span>*</span></label>
                                        <input class="form-control" id="town" name="town" type="text" required="">
                                    </div>
                                    <div class="col-12 form-group--block">
                                        <label>Phone: <span>*</span></label>
                                        <input class="form-control" name="phone" id="phone" type="text" required="">
                                    </div>
                                    <div class="col-12 form-group--block">
                                        <label>Email address: <span>*</span></label>
                                        <input class="form-control" id="email" name="email" type="email" required="">
                                    </div>
                                    <div class="col-12 form-group--block">
                                        <label>Order notes (optional)</label>
                                        <textarea class="form-control" placeholder="Note about your orders, e.g special notes for delivery." data-gramm="false" wt-ignore-input="true"></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <h3 class="checkout__title">Your Order</h3>
                        <div class="checkout__products">
                            <div class="row">
                                <div class="col-8">
                                    <div class="checkout__label">PRODUCT</div>
                                </div>
                                <div class="col-4 text-right">
                                    <div class="checkout__label">TOTAL</div>
                                </div>
                            </div>
                            <div class="checkout__list" id="pro-list">

                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <div class="checkout__total">Total</div>
                                </div>
                                <div class="col-4 text-right">
                                    <div class="checkout__money"></div>
                                </div>
                            </div>
                        </div>
                        <div class="checkout__payment">
                            <div class="checkout__label mb-3">SELECT PAYMENT</div>
                            <div class="form-group--block">
                                <input class="form-check-input" type="checkbox" id="checkboxBank" value="bank">
                                <label class="label-checkbox" for="checkboxBank"><b class="text-heading">Direct bank transfer</b></label>
                            </div>
                            <div class="form-group--block">
                                <input class="form-check-input" type="checkbox" value="cash" id="checkboxCash" checked="checked">
                                <label class="label-checkbox" for="checkboxCash"><b class="text-heading">Cash on delivery</b></label>
                            </div>
                            <div class="checkout__payment__detail">Pay with cash upon delivery
                                <div class="triangle-box">
                                    <div class="triangle"></div>
                                </div>
                            </div>
                            <div class="form-group--block">
                                <input class="form-check-input" type="checkbox" id="checkboxPaypal" value="paypal">
                                <label class="label-checkbox" for="checkboxPaypal"><b class="text-heading">PayPal </b><img src="assets/images/payment_visa.jpg" alt=""><img src="assets/images/payment_mastercart.jpg" alt=""><img src="assets/images/payment_electron.jpg" alt=""><a>What is PayPal?</a></label>
                            </div>
                        </div>
                        <button class="checkout__order btn .check-btn" type="submit" onclick="payWithPaystack()">Place order</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php 
    require_once 'footer.php';
?>