function getProducts(id){
	$.ajax({
		url: 'backend/api/catalog?proCat='+id,
		type: 'GET',
		dataType: 'json',
	})
	.done(function(res) {
		console.log(res);
		if(res.status == 200){
			showProducts(res.data)
		}
	})
	.fail(function() {
		console.log("error");
	});
}
