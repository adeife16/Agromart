function signup(){
	let formdata = new FormData(document.getElementById("signup-form"));
	$.ajax({
		url: 'backend/api/moderator',
		type: 'POST',
		dataType: 'json',
		data: formdata,
		contentType: false,
		processData: false
	})
	.done(function(res){
		if(res == 200){
			toastr.success("Moderator Created");
			setTimeout(function() {
				window.location.reload();
			}, 1000);
		}
		else{
			toastr.error("An error occured");
		}
	})
	.fail(function() {
		console.log("error");
	})
}