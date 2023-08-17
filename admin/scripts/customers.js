$(document).ready(function() {
	getCustomers()
});

function showCustomers(data){
	let tbody = $("#proData");
	let status;
	tbody.html("");

	for(let i in data){
		if(data[i].status == "Active"){
			status = "<button class='btn btn-warning disable' value='"+data[i].user_id+"'>Disable</button> ";
		}
		else{
			status = "<button class='btn btn-success enable' value='"+data[i].user_id+"'>Enable</button> ";			
		}
		tbody.append(`
			<tr>
				<td><img src="../images/profile_picture/`+data[i].picture+`" width="100" height="100"></td>
				<td>`+data[i].name+`</td>
				<td>`+data[i].email+`</td>
				<td>`+status+`</td>
				<td><button class="btn btn-danger" value="`+data[i].user_id+`">Delete</button></td>
			</tr>
		`);
	}
}

$(document).on('click', '.disable', function(event) {
	event.preventDefault();
	let id = $(this).val()

	disable(id)
});
$(document).on('click', '.enable', function(event) {
	event.preventDefault();
	let id = $(this).val()

	enable(id)
});