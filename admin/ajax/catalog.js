function getProducts(){
	$.ajax({
		url: 'backend/api/catalog?all',
		type: 'GET',
		dataType: 'json',
		
	})
	.done(function(res){
		console.log(res);
		if(res.status == 200){
			showProducts(res.data);
		}
	})
	.fail(function() {
		console.log("error");
	})
}

function del(id) {
	$.ajax({
		url: 'backend/api/catalog',
		type: 'POST',
		dataType: 'json',
		data: {delete: id},
	})
	.done(function(res){
		if(res == 200){
			toastr.success("Product Deleted");
			getProducts();
		}
		else{
			toastr.error("Error");
		}
	})
	.fail(function() {
		console.log("error");
	});
	
}