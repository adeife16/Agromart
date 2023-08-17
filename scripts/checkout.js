$(document).ready(function() {
	getAccount();
	getCart();
});

function showAccount(data){
	$("#fname").val(data.name.split(' ')[0]);
	$("#lname").val(data.name.split(' ')[1]);
	$("#email").val(data.email);
}

function showCart(data){
	$("#pro-list").html("");
	let total = 0;
	for(let i in data){
		total += data[i].total;
		$("#pro-list").append(`
            <div class="checkout__product__item">
                <div class="checkout-product">
                    <div class="product__name">`+data[i].product_name+`<span>(x`+data[i].quantity+`)</span></div>
                    <div class="product__unit">&#8358;`+data[i].price+`</div>
                </div>
                <div class="checkout-price">&#8358;`+data[i].total+`</div>
            </div>	
		`);
	}

	$(".checkout__money").html('&#8358;' + total);
	$(".checkout__money").attr('id', total);
	
}

const paymentForm = document.getElementById('checkout');
paymentForm.addEventListener("submit", payWithPaystack, false);

function payWithPaystack() {
  
  let handler = PaystackPop.setup({
    key: 'pk_test_3b4fda90986aba4b6db11a9141022994b5e95989', // Replace with your public key
    email: document.getElementById("email").value,
    amount: parseInt($(".checkout__money").attr('id')) * 100,
    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      toastr.error('Payment Cancelled');
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      console.log(response);
      toastr.success(message);
      checkout(response.reference);
    }
  });

  handler.openIframe();
}