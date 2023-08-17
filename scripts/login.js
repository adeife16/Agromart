$(document).ready(function() {
	
});

$("#login-btn").click(function(event) {
	event.preventDefault();

    var valid = true;

    $('.form-control').removeClass('is-valid is-invalid');

	let email = $("#email");
	let pass = $("#password");

	if(email.val() === ""){
		valid = false;
		email.addClass("is-invalid");
	}
	else{
		email.addClass("is-valid");
	}

	if(pass.val() == ""){
		valid = false;
		pass.addClass("is-invalid");
	}
	else{
		pass.addClass("is-valid");
	}

	if(valid){
		login();
	}
});