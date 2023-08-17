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
	})
	
}


function post(post) {
    let name = $("#pro_name").val();
    let cat = $("#pro_cat").val();
    let price = $("#pro_price").val();
    let desc = $("#pro_desc").val();

    let data = {
        name: name,
        cat: cat,
        price: price,
        desc: desc
    };

    $("#submit").html('Please wait...');
    $("#submit").attr('disabled', 'disabled');

    $.ajax({
        url: 'backend/api/create_product',
        type: 'POST',
        cache: false,
        data: {
            create: data
        },
        dataType: 'json'
    })
    .done(function(res) {
        if(res.status == 200){
            let id = res.data;
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
                    toastr.success("Product Created Successfully!")
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
    })
    .fail(function() {
        console.log("error");
    })
}
