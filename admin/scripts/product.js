let url = window.location.href;
let proId = url.split('?')[1];
$(document).ready(function() {
	getProduct(proId)
});

function showProduct(data){
	let pictures = data.pictures;
	let details = data.details[0];
	let reviews = data.reviews;
	var images = [];
	for(let i in pictures){
	    var picture = "../images/product/" + pictures[i].picture;
	    var index = i + 1;
	    var imageObject = {
	        src: picture,
	        alt: 'Image ' + index
	    };
	    images.push(imageObject);
	}
	$('.slider-container').imageSlider(images);

	let status = ""
	if(details.product_status == "Active"){
		status = "<span class='text-success'>"+details.product_status+"</span>";
	}
	else{
		status = "<span class='text-danger'>"+details.product_status+"</span>";
	}
	$(".details").html(`
		<h1>`+details.product_name+`</h1>
		<h3 class="color-orange">&#8358;`+details.product_price+`</h3>
		<p> Category: `+details.category_name+`</p>
		<p>Status: `+status+`</p>
		<br>
		<p>`+details.product_description+`</p>
		<br>
	`)

	$(".review-div").html("")
	for(let i in reviews){
		let rating = ""
		if(parseInt(reviews[i].review_rating) == 0){
			rating = "<i class='fas fa-star '></i><i class='fas fa-star '></i><i class='fas fa-star '></i><i class='fas fa-star '></i><i class='fas fa-star '></i>"
		}
		else{
			for(let j = 1; j <= parseInt(reviews[i].review_rating); j++){
				rating += "<i class='fas fa-star  color-gold'></i>";
			}
		}
		$(".review-div").append(`
			<div class="col-md-12 review-box">
				<div class="row">
					<div class="col-md-3">
						<div>
							<img src="../images/profile_picture/`+reviews[i].customer_picture+`" width="100" height="100">
						</div>
						<p>
							<strong>`+reviews[i].customer_name+`</strong>
						</p>
					</div>
					<div class="col-md-9">
						<div>
							<p>`+reviews[i].review_comment+`</p>
						</div>
						<div>
							<p>`+rating+`</p>
						</div>
					</div>
				</div>
			</div>
		`)

	}
}

