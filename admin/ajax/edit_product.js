function getProduct(id){
	$.ajax({
		url: 'backend/api/catalog?product='+id,
		type: 'GET',
		dataType: 'json',
	})
	.done(function(res) {
		console.log(res);
		if(res.status == 200){
			showProduct(res.data)
		}
	})
	.fail(function() {
		console.log("error");
	});
}


function getCat() {
	$.ajax({
		url: 'backend/api/category?all',
		type: 'GET',
		dataType: 'json',	
	})
	.done(function(res) {
		console.log(res);
		if(res.status == 200){
			showCat(res.data);
		}
	})
	.fail(function() {
		console.log("error");
	});
}


function post(post) {
    let name = $("#pro_name").val();
    let cat = $("#pro_cat").val();
    let price = $("#pro_price").val();
    let desc = $("#pro_desc").val();

    let data = {
    	proId: proId,
        name: name,
        cat: cat,
        price: price,
        desc: desc
    };

    $("#submit").html('Please wait...');
    $("#submit").attr('disabled', 'disabled');

    $.ajax({
        url: 'backend/api/edit_product',
        type: 'POST',
        cache: false,
        data: {
            edit: data
        },
        dataType: 'json'
    })
    .done(function(res) {
    })
    .fail(function() {
        console.log("error");
    })
	.always(function() {
    	if(post.length > 0){
            let id = proId;
            // upload Pictures
            $.ajax({
                url: 'backend/api/create_product',
                type: 'POST',
                data: {
                    savepictures: post,
                    id: id
                },
                dataType: 'json'
            })
            .done(function(res){
                $("#submit").html('Submit');
                $("#submit").removeAttr("disabled");
                if(res.status == "success"){
                    toastr.success("Product updated Successfully!")
                    setTimeout(function(){
                        window.location.reload();
                    },3000);
                }
                else{
                    toastr.error("Error occured while creating product")
                }
            })
            .fail(function() {
                console.log("error");
            })  		
    	}
    	else{
            toastr.success("Product updated Successfully!")
            setTimeout(function(){
                window.location.reload();
            },3000);
    	}
	});
}

function removePicture(id) {
	$.ajax({
		url: 'backend/api/edit_product',
		type: 'POST',
		dataType: 'json',
		data: {removePicture: id},
	})
	.done(function(res) {
		if(res == 200){
			toastr.success("Picture removed");
		}
		else{
			toastr.error("Error")
		}
	})
	.fail(function() {
		console.log("error");
	});
	
}

$.ajax({
	url: '/path/to/file',
	type: 'default GET (Other values: POST)',
	dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
	data: {param1: 'value1'},
})
.done(function() {
	console.log("success");
})
.fail(function() {
	console.log("error");
})
