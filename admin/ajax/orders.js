function getOrders() {
	$.ajax({
		url: 'backend/api/order?order=all',
		type: 'GET',
		dataType: 'json',
		
	})
	.done(function(res){
		console.log(res);
		if(res.status == 200){
			showOrder(res.data);
		}
	})
	.fail(function() {
		console.log("error");
	});
	
}

function approve(id){
	$.ajax({
		url: 'backend/api/order',
		type: 'POST',
		dataType: 'json',
		data: {approve: id},
	})
	.done(function(res){
		if(res == 200){
			toastr.success("Order Approved");
			getOrders();
		}
	})
	.fail(function() {
		console.log("error");
	});
	
}

function reject(id){
	$.ajax({
		url: 'backend/api/order',
		type: 'POST',
		dataType: 'json',
		data: {reject: id},
	})
	.done(function(res){
		if(res == 200){
			toastr.success("Order Rejected");
			getOrders();
		}
	})
	.fail(function() {
		console.log("error");
	});
	
}