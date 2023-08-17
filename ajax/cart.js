function addCart(data){
	$.ajax({
		url: 'backend/api/cart',
		type: 'POST',
		dataType: 'json',
		data: {addCart: data},
	})
	.done(function(res){
		if(res == 200){
			toastr.success("Item added to cart")
		}
		getCart();
	})
	.fail(function() {
		console.log("error");
	});
	
}

function getCart(){
	$.ajax({
		url: 'backend/api/cart?getCart',
		type: 'GET',
		dataType: 'json',
		
	})
	.done(function(res){
		if(res.status == 200){
			showCart(res.data);
		}
		else{
		$("#cart-count").html("");
		$("#cart-list").html("")
		$("#cart-total").html('&#8358;0' )

		}
	})
	.fail(function() {
		console.log("error");
	});
	
}

function removeCart(id){
	$.ajax({
		url: 'backend/api/cart?removeCart='+id,
		type: 'GET',
		dataType: 'json',
		
	})
	.done(function(res){
		if(res == 200){
			toastr.success("Item removed from cart");
			getCart();
		}
	})
	.fail(function() {
		console.log("error");
	});
	
}