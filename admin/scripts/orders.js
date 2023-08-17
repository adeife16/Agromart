$(document).ready(function() {
	getOrders();
});

function showOrder(data) {
	let tbody = $("#proData").html("");
	let action= "";
	let reject = ""
	let clas = "text-success";
	for(let i in data){
		if(data[i].order_status == "Pending"){
			clas = "text-warning";
			action = "<button class='btn btn-success approve' value='"+data[i].order_id+"'>Approve</button>";
			reject = ' <button class="btn btn-danger reject" value="'+data[i].order_id+'">Reject</button>'
		}
		else if(data[i].order_status == "Rejected"){
			clas = "text-danger";
		}
		tbody.append(`
			<tr>
				<td>`+data[i].order_id+`</td>
				<td>`+data[i].customer_name+`</td>
				<td>&#8358;`+data[i].order_total+`</td>
				<td class="`+clas+`">`+data[i].order_status+`</td>
				<td>`+data[i].order_date+`</td>
				<td>`+action+` `+reject+`</td>
			</tr>
		`);
	}
}

$(document).on('click', '.approve', function(event) {
	event.preventDefault();
	let id = $(this).val();

	approve(id);
});

$(document).on('click', '.reject', function(event) {
	event.preventDefault();
	let id = $(this).val();

	reject(id);
});