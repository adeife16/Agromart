$(document).ready(function() {
	$.ajax({
		url: 'backend/api/category?all',
		type: 'GET',
		dataType: 'json',
	})
	.done(function(res){
		for(let i in res.data){
			$("#nav-cat, #nav-cat-mobile, #nav-cat-mobile-sidebar").append(`
				<li>
					<a href="products?`+res.data[i].id+`">`+res.data[i].name+`</a>
				</li>
			`);
		}
	})
	.fail(function() {
		console.log("error");
	})
	
});