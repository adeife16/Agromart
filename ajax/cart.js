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
		console.log(res);
		if(res.status == 200){
			showCart(res.data);
		}
	})
	.fail(function() {
		console.log("error");
	});
	
}