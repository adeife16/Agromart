<?php
	session_start();
	$user_id = $_SESSION['user_id'];

	require_once '../database.php';

	$db = new Database();


	if(isset($_POST['addCart']) AND $_POST['addCart'] != "")
	{
		$data = $_POST['addCart'];
		$cart_id = "cart-" .str_shuffle(substr(md5(time().mt_rand().time()).md5(time()), 0,20));
		$pro_id = $data['id'];
		$qty = $data['qty'];

		// get product price
		$pro_details = $db->fetchWhere("products", "product_id", $pro_id, "price");
		foreach ($pro_details as $val){
			$price = $val['price'];
		}

		// check if item exists

		$where = [
			['field' => 'product_id', 'operator' => '=', 'value' => $pro_id],
			['field' => 'customer_id', 'operator' => '=', 'value' => $user_id]
		];
		$check = $db->selectWhere("cart", ["quantity", "cart_id"], $where);

		if(count($check) > 0)
		{
			foreach ($check as $value)
			{
				$old_qty = $value['quantity'];
				$cart_id = $value['cart_id'];
			}

			$new_qty = intval($old_qty) + intval($qty);

			$field = ['quantity', 'total'];
			$value = [$new_qty, $new_qty * intval($price)];

			$update = $db->updateWhere("cart", $field, $value, 'cart_id', $cart_id);

			if($update)
			{	
				echo json_encode(200);
			}
			else
			{
				echo json_encode(500);
			}
		}
		else
		{
			$cart = [
								"cart_id" => $cart_id,
								"product_id" => $pro_id,
								"quantity" => $qty,
								"total" => intval($qty) * intval($price),
								"customer_id" => $user_id
							];

			$add_to_cart = $db->insert("cart", $cart);

			if($add_to_cart)
			{
				echo json_encode(200);
			}
			else
			{
				echo json_encode(500);
			}
		}


		exit;
	}

	if(isset($_GET['getCart']))
	{

		$selectFields = array(
		    'c.cart_id',
		    'p.product_id',
		    'p.name AS product_name',
		    'p.price',
		    'pic.picture AS product_picture',
		    'c.quantity',
		    'c.total'
		);

		$joins = array(
		    array(
		        'type' => ' ',
		        'table' => 'products p',
		        'on' => 'c.product_id = p.product_id'
		    ),
		    array(
		        'type' => 'LEFT ',
		        'table' => '(SELECT product_id, MIN(id) AS picture_id FROM picture GROUP BY product_id) min_pic',
		        'on' => 'p.product_id = min_pic.product_id'
		    ),
		    array(
		        'type' => 'LEFT ',
		        'table' => 'picture pic',
		        'on' => 'min_pic.picture_id = pic.id'
		    )
		);

		$whereClauses = array(
		    array(
		        'field' => 'c.customer_id',
		        'operator' => '=',
		        'value' => $user_id
		    )
		);

		$result = $db->selectWhereJoin('cart c', $selectFields, $joins, $whereClauses);

		if(!empty($result))
		{
			echo json_encode(["status" => 200, "data" => $result]);
		}
		else
		{
			echo json_encode(500);
		}
	}

	if(isset($_GET['removeCart']) AND $_GET['removeCart'] != "")
	{
		$id = $_GET['removeCart'];

		$remove = $db->deleteWhere("cart", "cart_id", $id);

		if($remove)
		{
			echo json_encode(200);
		}
		else
		{
			echo json_encode(500);
		}
	}