$(document).ready(function() {
	getCat();
	let $imageUploader = $('#imageUpload').multiImageUploader({
	    uploadUrl: '/upload',
	    maxImages: 7,
	    maxFileSize: 5242880,
	    allowedExtensions: ['jpg', 'jpeg', 'png'],
	    onUpload: function (file) {
	      // Implement your upload logic here
	      // console.log('Uploading file:', file);
	    },
	    onRemove: function (fileIndex) {
	      // Handle remove action
	      // console.log('Removing file at index:', fileIndex);
	    },
	    onError: function (errorMessage) {
	      // Handle error messages
	      toastr.error(errorMessage);
	    },
	  });

		// Form submit
	$("#submit").click(function(e){
	  e.preventDefault();

	  var files = $imageUploader.getSelectedImages();
		if(validate() == true){
			post(files);
		}

	});
});

function showCat(data){
	let cat = $("#pro_cat");
	cat.html("<option value=''>Select Category</option>");
	for(let i in data){
		cat.append(`
			<option value="`+data[i].id+`">`+data[i].name+`</option>
		`);
	}
}


// form validation
function validate(){

	let valid = true;
	let elements = ["#pro_name", "#pro_cat", "#pro_price", "#pro_desc"];
	$(".warn").remove();
	for(let i in elements){
		if($(elements[i]).val() == ""){
			$(elements[i]).after("<div class='color-red warn'>This input is required</div>");
			valid = false;
		}
		else{
			valid = true;
		}
	}
	return valid;
}
