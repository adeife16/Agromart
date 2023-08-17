let url = window.location.href;
let proId = url.split('?')[1];
$(document).ready(function() {
	getProduct(proId);
	getCat();
});

function showProduct(data){
	let details = data.details[0];
	let div = $("#proData");
	let imageUrls = [];

	for(let i in data.pictures){
		imageUrls.push("../images/product/" + data.pictures[i].picture);
	}

	$("#pro_name").val(details.product_name);
	$("#pro_price").val(details.product_price);
	$("#pro_desc").val(details.product_description);

	setTimeout(function() {
        $('option[value=' + details.category_id + ']').attr('selected',true);
	}, 2000);

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

	var $previewContainer = $('#preview-container');
    
    imageUrls.forEach(function (imageUrl) {
      var image = new Image();
      image.onload = function () {
        var $imageContainer = $('<div class="image-container"></div>');
        var $previewImage = $('<img src="' + imageUrl + '" alt="Image">');
        var $removeButton = $('<button class="remove-button">Remove</button>');
        $removeButton.val(imageUrl.split('/')[3])

        $previewImage.appendTo($imageContainer);
        $removeButton.appendTo($imageContainer);
        $('<strong>' + imageUrl.split('/')[3] + '</strong>').appendTo($imageContainer);
        // You can add more details like file size here
        $imageContainer.appendTo($previewContainer);

        $removeButton.on('click', function () {
        	removePicture($(this).val());
          $imageContainer.remove();
        });
      };
      image.src = imageUrl;
    });

	$("#submit").click(function(event) {
		event.preventDefault();
	  	var files = $imageUploader.getSelectedImages();
		if(validate() == true){
			post(files);
		}
	});

}


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


function showCat(data){
	let cat = $("#pro_cat");
	cat.html("<option value=''>Select Category</option>");
	for(let i in data){
		cat.append(`
			<option value="`+data[i].id+`">`+data[i].name+`</option>
		`);
	}
}

