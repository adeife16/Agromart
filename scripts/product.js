let url = window.location.href;
let proId = url.split('?')[1];
$(document).ready(function() {
		$(document).on("click", ".minus", function() {
        var input = $(this).siblings(".quantity")[0];
        if (input) {
            input.stepDown();
            $(input).trigger("change"); // Trigger the change event
        }
    });

    $(document).on("click", ".plus", function() {
        var input = $(this).siblings(".quantity")[0];
        if (input) {
            input.stepUp();
            $(input).trigger("change"); // Trigger the change event
        }
    });
	getProduct(proId)
});

function showProduct(data){
	let details = data.details[0];
	let pictures = data.pictures;
	let reviews = data.reviews;
	let rating = ""
	if(reviews.length == 0){
		rating = "<i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i>"
	}
	else{

	}
	$("#pro-thumb").html('');
	for(let i in data.pictures){
		$("#pro-thumb").append(`
	        <div class="ps-gallery__item">
	            <img src="images/product/`+pictures[i].picture+`" alt="alt">
	        </div>
		`);
	}
    var firstChildDiv = $("#pro-thumb").find("div:first-child");
    firstChildDiv.addClass("active");
    $("#ps-product-zoom").attr('src', 'images/product/'+pictures[0].picture);


    $("#pro-name").html(details.product_name);
    $("#pro-rating").html(rating);
    $(".price-sale").html('&#8358;' + details.product_price)
    $(".price-sale").attr('id', details.product_price)
    selectImageProductDetail();

    if(details.status == "Active"){
    	$(".stock").html("In Stock");
    }
    else{
    	$(".ps-product__avai").removeClass('alert_success');
    	$(".ps-product__avai").addClass('alert_error');
    	$(".stock").html("Out of Stock");
    }

    $(".pro-cat").html(details.category_name);
    $("#pro-desc").html(details.product_description);

    $(".ps-product__addcart").val(details.external_product_id);

    if(reviews.length > 0){
	$(".review-div").html("")
	for(let i in reviews){
		let rating = ""
		for(let j = 1; j <= parseInt(reviews[i].review_rating); j++){
			rating += "<i class='fa fa-star  text-gold'></i>";
		}
		$(".review-div").append(`
			<div class="col-md-8 mt-3 review-box">
				<div class="row shadow p-3">
					<div class="col-md-3">
						<div>
							<img src="images/profile_picture/`+reviews[i].customer_picture+`" width="100" height="100">
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
}
// &#8358;

function selectImageProductDetail() {
    $('#ps-lightgallery-videos').lightGallery({
        controls: true,
        autoplay: true,
    });

    $('.ps-gallery__item').on('click', function (e) {
        $('.ps-gallery__item').removeClass('active');
        $('#ps-lightgallery-videos').removeClass('active')
        $(this).addClass('active');
        $('#ps-product-zoom').attr("src", $(this).find('img').attr("src"));
        $('#ps-product-zoom').attr("data-zoom-image", $(this).find('img').attr("src"));

        if ($(this).attr("data-video-url")) {
            $('#ps-lightgallery-videos').addClass('active');
            $('#video-play').find('source').attr("src", $(this).attr("data-video-url"));
        }
    });

    $(".ps-product__attribute").on('click', function (e) {
        $(".ps-product__attribute").removeClass('active');
        $(this).addClass("active");
        $(".ps-product__attribute-value").text($(this).attr("data-value"));
    });

    $(".category-toggle-widget").on('click', function (e) {
        var current = $(this).parent().parent();
        current.find('.widget__list').toggleClass('open');
    });

    $('.shop-widget-toggle').on('click', function (e) {
        var tagi = $(this).find('i');
        tagi.toggleClass("icon-plus");
        tagi.toggleClass("icon-minus");
        var current = $(this).parent().parent();
        current.toggleClass("open");
    });

    $('.faq-toggle').on('click', function (e) {
        var tagi = $(this).find('i');
        tagi.toggleClass("icon-plus");
        tagi.toggleClass("icon-minus");
        var current = $(this).parent().parent();
        current.toggleClass("active");
    });
}

$(document).on('change', '.quantity', function(event) {
	let price = $(".price-sale").attr("id");
	let total = parseInt(price) * parseInt($(this).val())
	$(".price-sale").html("&#8358;"+total)
});


$(document).on('click', '.ps-product__addcart', function(event) {
		event.preventDefault();
		let id = $(this).val();
		let price = $(".price-sale").attr("id");
		let qty = $(".quantity").val();

		let data = {
			id: id,
			price: price,
			qty: qty
		};

		addCart(data);
	});

var selectedRating = 0;

$(".star").on("mouseenter", function() {
    if (selectedRating === 0) {
        $(this).prevAll(".star").addBack().addClass("text-gold");
    }
}).on("mouseleave", function() {
    if (selectedRating === 0) {
        $(".star").removeClass("text-gold");
    }
}).on("click", function() {
    selectedRating = $(this).data("value");
    $(".star").removeClass("text-gold");
    $(this).prevAll(".star").addBack().addClass("text-gold");
});



$("#submitBtn").on("click", function() {
    var reviewText = $("#review").val();

    if (selectedRating === 0) {
        toastr.error("Please select a rating.");
    } 
    else if (!reviewText.trim()) {
        toastr.error("Please enter a review.");
    }
    else {
    	rating(selectedRating, reviewText, proId);
    }
});
