function getAccount(){
	$.ajax({
		url: 'backend/api/account?getacc',
		type: 'GET',
		dataType: 'json',
		
	})
	.done(function(res){
		if(res.status == 200){
			showAccount(res.data);
		}
	})
	.fail(function() {
		console.log("error");
	})
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


function checkout(ref){
	$.ajax({
		url: 'backend/api/checkout',
		type: 'POST',
		dataType: 'json',
		data: {checkout: ref},
	})
	.done(function(res){
		if(res == 200){
			toastr.success("Order Processed");
			setTimeout(function() {
				window.location.replace("index");
				// console.log("Here");
			}, 3000);
		}
	})
	.fail(function() {
		console.log("error");
	})	
}