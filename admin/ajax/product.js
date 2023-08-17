function getProduct(id){
	$.ajax({
		url: 'backend/api/catalog?product='+id,
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