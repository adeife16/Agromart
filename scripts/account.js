$(document).ready(function() {
	getAccount();
});

function showAccount(data){
	$("#account-form").html(`
	    <div class="form-row justify-content-center">
	        <div class="col-12 col-lg-6 form-group--block">
	            <label>First name: <span>*</span></label>
	            <input class="form-control" type="text" name="fname" id="fname" value="`+data.name.split(' ')[0]+`">
	        </div>
	        <div class="col-12 col-lg-6 form-group--block">
	            <label>Last name<span>*</span></label>
	            <input class="form-control" type="text" name="lname" id="lname" value="`+data.name.split(' ')[1]+`">
	            <div class="invalid-feedback">Please enter last name!</div>
	        </div>
	        <div class="col-12 form-group--block">
	            <label>Email Address: <span>*</span></label>
	            <input class="form-control" type="email" name="email" id="email" value="`+data.email+`" readonly disabled>
	        </div>
	        <div class="col-12 form-group--block">
	            <label>Picture Upload: <span>*</span></label>
	            <div class="alert"></div>
	            <div id='img_container'><img id="preview" src="images/profile_picture/`+data.picture+`" alt="your image" width="100" height="100" title=''/></div> 
	            <div class="input-group"> 
	                <div class="custom-file">
	                    <input type="file" id="inputGroupFile01" class="imgInp custom-file-input" name="picture" aria-describedby="inputGroupFileAddon01" accept="jpg, jpeg">
	                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
	              </div>
	            </div>
	        </div>
	        <div class="col-12 form-group--block mt-5 text-right">
	            <button class="btn btn-success btn-lg" type="button" id="update">Submit</button>
	        </div>
	    </div>
	`);
}


$(document).on('click', '#update', function(event){
    event.preventDefault(); // Prevent form submission for now
    
    // Reset classes and remove error messages
    $('.form-control').removeClass('is-valid is-invalid');
    $('.invalid-feedback').hide();
    
    var valid = true;
    
    // Validate first name
    var fname = $('#fname').val().trim();
    if (fname === ''){
        valid = false;
        $('#fname').addClass('is-invalid');
    } else {
        $('#fname').addClass('is-valid');
    }
    
    // Validate last name
    var lname = $('#lname').val().trim();
    if (lname === '') {
        valid = false;
        $('#lname').addClass('is-invalid');
    } else {
        $('#lname').addClass('is-valid');
    }

    
    // If all inputs are valid, you can proceed with form submission
    if (valid) {
    	update();
    }
});

// Function to validate email address
function isValidEmail(email) {
    var pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return pattern.test(email);
}