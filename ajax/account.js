function getAccount(){
	$.ajax({
		url: 'backend/api/account?getacc',
		type: 'GET',
		dataType: 'json',
		
	})
	.done(function(res){
		if(res.status == 200){
			showAccount(res.data);
		}
	})
	.fail(function() {
		console.log("error");
	})
}

function update() {
	let formdata = new FormData(document.getElementById("account-form"));
	$.ajax({
		url: 'backend/api/account',
		type: 'POST',
		dataType: 'json',
		data: formdata,
		contentType: false,
		processData: false
	})
	.done(function(res){
		if(res == 200){
			toastr.success('Profile Updated');
			getAccount();
		}
		else{
			toastr.error("An error occured");
		}
	})
	.fail(function() {
		console.log("error");
	})
	
	
}