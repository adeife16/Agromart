function signup(){
	let formdata = new FormData(document.getElementById("signup-form"));
	$.ajax({
		url: 'backend/api/signup',
		type: 'POST',
		dataType: 'json',
		data: formdata,
		contentType: false,
		processData: false
	})
	.done(function(res){
		if(res == 200){
			toastr.success("Signup Successfully");
			setTimeout(function() {
				window.location.replace("login");
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