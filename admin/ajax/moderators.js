function getMods() {
	$.ajax({
		url: 'backend/api/moderator?get=all',
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
		url: 'backend/api/moderator',
		type: 'POST',
		dataType: 'json',
		data: {disable: id},
	})
	.done(function(res){
		if(res == 200){
			toastr.success("User Disabled");
			getMods();
		}
	})
	.fail(function() {
		console.log("error");
	});
}

function enable(id) {
	$.ajax({
		url: 'backend/api/moderator',
		type: 'POST',
		dataType: 'json',
		data: {enable: id},
	})
	.done(function(res){
		if(res == 200){
			toastr.success("User Enabled");
			getMods();
		}
	})
	.fail(function() {
		console.log("error");
	});
}

function del(id) {
	$.ajax({
		url: 'backend/api/moderator',
		type: 'POST',
		dataType: 'json',
		data: {delete: id},
	})
	.done(function(res){
		if(res == 200){
			toastr.success("User Deleted");
			getMods();
		}
		else{
			toastr.error("Error");
		}
	})
	.fail(function() {
		console.log("error");
	});
	
}