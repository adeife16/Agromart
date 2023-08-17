function getCustomers() {
	$.ajax({
		url: 'backend/api/customer?get=all',
		type: 'GET',
		dataType: 'json',
		
	})
	.done(function(res){
		console.log(res);
		if(res.status == 200){
			showCustomers(res.data);
		}
	})
	.fail(function() {
		console.log("error");
	});
}

function disable(id) {
	$.ajax({
		url: 'backend/api/customer',
		type: 'POST',
		dataType: 'json',
		data: {disable: id},
	})
	.done(function(res){
		if(res == 200){
			toastr.success("User Disabled");
			getCustomers();
		}
	})
	.fail(function() {
		console.log("error");
	});
}

function enable(id) {
	$.ajax({
		url: 'backend/api/customer',
		type: 'POST',
		dataType: 'json',
		data: {enable: id},
	})
	.done(function(res){
		if(res == 200){
			toastr.success("User Enabled");
			getCustomers();
		}
	})
	.fail(function() {
		console.log("error");
	});
}