function getDashboard() {
	$.ajax({
		url: 'backend/api/dashboard?getStat',
		type: 'GET',
		dataType: 'json',
		
	})
	.done(function(res){
		if(res.status == 200){
			showDashboard(res);

		    $.ajax({
				url: 'backend/api/dashboard?chartdata',
				type: 'GET',
				dataType: 'json'
				})
				.done(function(res){			
				showChart(res);

				});
		}
	})
	.fail(function() {
		console.log("error");
	});
	
}