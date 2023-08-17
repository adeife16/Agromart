function login(){
	let formdata = new FormData(document.getElementById("login-form"));
	
	$.ajax({
		url: 'backend/api/login',
		type: 'POST',
		dataType: 'json',
		data: formdata,
		contentType: false,
		processData: false
	})
	.done(function(res){
		if(res == 200){
			toastr.success("Login Successful");
			setTimeout(function() {
				window.location.replace("index");
			}, 1000);
		}
		else{
			toastr.error("Invalid Email or Password");
		}
	})
	.fail(function() {
		console.log("error");
	})
	
	
}