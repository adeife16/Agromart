function getProducts(){
	$.ajax({
		url: 'backend/api/catalog?all',
		type: 'GET',
		dataType: 'json',
		
	})
	.done(function(res){
		if(res.status == 200){
			showProducts(res.data);
		}
	})
	.fail(function() {
		console.log("error");
	})
}