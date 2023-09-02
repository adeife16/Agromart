let url = window.location.href;
let catId = url.split('?')[1];
$(document).ready(function() {
	getProducts(catId)
});


function showProducts(data){
	let div = $("#prodata");
	$(".cat").html("Product Category: " + data[0].category_name);

	div.html("");

	for(let i in data){
		let rating = ""
		if(parseInt(data[i].average_rating) == 0){
			rating = "<i class='fa fa-star '></i><i class='fa fa-star '></i><i class='fa fa-star '></i><i class='fa fa-star '></i><i class='fa fa-star '></i>"
		}
		else{
			for(let j = 1; j <= parseInt(data[i].average_rating); j++){
				rating += "<i class='fa fa-star  text-gold'></i>";
			}
		}
		div.append(`
	        <div class="col-6 col-md-4 col-lg-2dot4 p-0">
	            <div class="ps-product--standard"><a href="product?`+data[i].external_product_id+`"><img class="ps-product__thumbnail" src="images/product/`+data[i].product_picture+`" alt="`+data[i].product_name+`"></a><a class="ps-product__expand" href="javascript:void(0);" id="`+data[i].external_product_id+`" data-toggle="modal" data-target="#popupQuickview"><i class="icon-expand"></i></a>
	                <div class="ps-product__content">
	                    <h5><a class="ps-product__name" href="product?`+data[i].external_product_id+`">`+data[i].product_name+`</a></h5>
	                    <p class="ps-product__unit">`+data[i].category_name+`</p>
	                    <div class="ps-product__rating">
	                        	`+rating+`
	                    </div>
	                    <p class="ps-product-price-block">
	                    	<span class="ps-product__sale price-`+data[i].external_product_id+`" id="`+data[i].product_price+`">&#8358;`+data[i].product_price+`</span>
	                    </p>
	                </div>
	                <div class="ps-product__footer">
	                    <div class="def-number-input number-input safari_only">
	                        <button class="minus" ><i class="icon-minus"></i></button>
	                        <input class="qty" min="1" name="quantity" value="1" type="number" id="qty-`+data[i].external_product_id+`">
	                        <button class="plus" ><i class="icon-plus"></i></button>
	                    </div>
	                    <div class="ps-product__total" >Total: <span id="total-`+data[i].external_product_id+`">&#8358;`+data[i].product_price+`</span>
	                    </div>
	                    <button class="ps-product__addcart addCart" id="" value="`+data[i].external_product_id+`" ><i class="icon-cart"></i>Add to cart</button>
	                    <div class="ps-product__box"><a class="" href="#" id="wish-`+data[i].external_product_id+`">Add toWishlist</a></div>
	                </div>
	            </div>
	        </div>
		`);
	}
}