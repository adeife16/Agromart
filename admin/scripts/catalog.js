$(document).ready(function() {
	getProducts();
});

function showProducts(data){
	let table = $("#proData");

	table.html("");

	for(let i in data){
		let rating = ""
		if(parseInt(data[i].average_rating) == 0){
			rating = "<i class='fas fa-star '></i><i class='fas fa-star '></i><i class='fas fa-star '></i><i class='fas fa-star '></i><i class='fas fa-star '></i>"
		}
		else{
			for(let j = 1; j <= parseInt(data[i].average_rating); j++){
				rating += "<i class='fas fa-star  color-gold'></i>";
			}
		}
		table.append(`
			<tr>
				<td><a href="product?`+data[i].external_product_id+`"><img src="../images/product/`+data[i].product_picture+`" width="100" height="100"></a></td>
				<td><a href="product?`+data[i].external_product_id+`" class="color-orange">`+data[i].product_name+`</a></td>
				<td>&#8358;`+data[i].product_price+`</td>
				<td>`+data[i].category_name+`</td>
				<td>`+rating+`</td>
				<td>
					<a class="btn btn-success edit"href="edit_product?`+data[i].external_product_id+`">Edit</a>
					<button class="btn btn-danger delete" type="button" id="`+data[i].external_product_id+`" value="`+data[i].external_product_id+`">Delete</button>
				</td>
			</tr>
		`);
	}
}

$(document).on('click', '.delete', function(event) {
	event.preventDefault();
	let id = $(this).val();
	del(id);
});