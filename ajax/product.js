function getProduct(id){
	$.ajax({
		url: 'backend/api/product?product='+id,
		type: 'GET',
		dataType: 'json',
	})
	.done(function(res) {
		console.log(res);
		if(res.status == 200){
			showProduct(res.data)
		}
	})
	.fail(function() {
		console.log("error");
	});
}

function rating(rating, review, proId){
	$.ajax({
		url: 'backend/api/product',
		type: 'POST',
		dataType: 'json',
		data: {
			rate: rating,
			review: review,
			proId: proId
		},
	})
	.done(function(res){
		if(res == 200){
			toastr.success("Success")
			getProduct(proId);
		}
	})
	.fail(function() {
		console.log("error");
	});
	
}