$(document).ready(function() {
	getCart();
	$(document).on("click", ".minus", function() {
        var input = $(this).siblings(".qty")[0];
        if (input) {
            input.stepDown();
            $(input).trigger("change"); // Trigger the change event
        }
    });

    $(document).on("click", ".plus", function() {
        var input = $(this).siblings(".qty")[0];
        if (input) {
            input.stepUp();
            $(input).trigger("change"); // Trigger the change event
        }
    });
});

	$(document).on('change', '.qty', function(event) {
		let id = $(this).attr("id").split('-')[1];
		let price = $(".price-"+id).attr("id");
		let total = parseInt(price) * parseInt($(this).val())
		$("#total-"+id).html("&#8358;"+total)
	});

	$(document).on('click', '.addCart', function(event) {
		event.preventDefault();
		let id = $(this).val();
		let price = $(".price-"+id).attr("id");
		let qty = $("#qty-"+id).val();

		let data = {
			id: id,
			price: price,
			qty: qty
		};

		addCart(data);
	});

	function showCart(data){
		$("#cart-count, #cart-count-mobile").html(data.length);
		let div = $("#cart-list, #cart-list-mobile");
		let total = 0;

		div.html("");

		for(let i in data){
			total += parseInt(data[i].total);
			div.append(`
	            <li class="cart-item">
	                <div class="ps-product--mini-cart"><a href="product?`+data[i].product_id+`"><img class="ps-product__thumbnail" src="images/product/`+data[i].product_picture+`" alt="alt"></a>
	                    <div class="ps-product__content"><a class="ps-product__name" href="product?`+data[i].product_id+`">`+data[i].product_name+`</a>
	                        <p class="ps-product__unit">&#8358;`+data[i].price+` (x`+data[i].quantity+`)</p>
	                        <p class="ps-product__meta"> <span class="ps-product__price">&#8358;`+data[i].total+`</span>
	                        </p>
	                    </div>
	                    <div class="ps-product__remove cart-remove" id="`+data[i].cart_id+`"><i class="icon-trash2"></i></div>
	                </div>
	            </li>
			`)
			$("#cart-total, #cart-total-mobile").html('&#8358;' + total)
		}
	}

	$(document).on('click', '.cart-remove', function(event) {
		event.preventDefault();
		let id = $(this).attr('id');

		removeCart(id);
	});