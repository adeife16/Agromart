$(document).ready(function() {
});

$('#signup').click(function(event){
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
    
    // Validate email address
    var email = $('#email').val().trim();
    if (email === '' || !isValidEmail(email)) {
        valid = false;
        $('#email').addClass('is-invalid');
    } else {
        $('#email').addClass('is-valid');
    }
    
    // Validate password
    var password = $('#password').val().trim();
    if (password === '') {
        valid = false;
        $('#password').addClass('is-invalid');
    } else {
        $('#password').addClass('is-valid');
    }
    
    // Validate retype password
    var conPass = $('#con_pass').val().trim();
    if (conPass === '' || conPass !== password) {
        valid = false;
        $('#con_pass').addClass('is-invalid');
    } else {
        $('#con_pass').addClass('is-valid');
    }

    // Validate file upload
    var file = $("#inputGroupFile01").val();
    if(file === ""){
    	valid = false;
    	$("#inputGroupFile01").addClass("is-invalid");
    }
    else{
    	$("#inputGroupFile01").addClass("is-valid");
    }
    
    // If all inputs are valid, you can proceed with form submission
    if (valid) {
    	signup();
    }
});

// Function to validate email address
function isValidEmail(email) {
    var pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return pattern.test(email);
}