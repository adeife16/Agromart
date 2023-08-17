<?php
	session_start();
	$user_id = $_SESSION['user_id'];

	require_once '../database.php';

	$db = new Database();


	if(isset($_POST['checkout']) AND $_POST['checkout'] != "")
	{
		$error = true;
		$ref = $_POST['checkout'];

		$get_cart = $db->fetchWhere("cart", "customer_id", $user_id, "cart_id");

		foreach ($get_cart as $val)
		{
			$field = ["order_id", "status"];
			$values = [$ref, "Processed"];
			$update = $db->updateWhere("cart", $field, $values, "cart_id", $val['cart_id']);
			if(!$update)
			{
				$error = false;
				break;
			}
		}
		if($error == true)
		{
			$data = [
				"order_id" => $ref,
				"date" => date('Y-m-d'),
				"customer_id" => $user_id
			];

			$insert = $db->insert("orders", $data);

			if($insert)
			{
				echo json_encode(200);
			}
		}
		else
		{
			echo json_encode(500);
		}
	}