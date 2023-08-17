<?php
	session_start();
	$user_id = $_SESSION['user_id'];

	require_once '../database.php';

	$db = new Database();


	if (isset($_GET['product']) && $_GET['product'])
	{
		$pro_id = $_GET['product'];
		$query = "SELECT 
		    p.id AS product_id,
		    p.product_id AS external_product_id,
		    p.name AS product_name,
		    p.price AS product_price,
		    p.description AS product_description,
		    p.status AS product_status,
		    c.name AS category_name,
		    c.id AS category_id
		FROM products p
		JOIN categories c ON p.category_id = c.id
		WHERE p.product_id = '".$pro_id."'";

		$details = $db->directQuery($query);
		foreach ($details as $val)
		{
			$id = $val['product_id'];
		}
		if ($details)
		{
			$pictures = $db->fetchWhere("picture", "product_id", $pro_id, "picture");

			$query = "SELECT 
			    pr.id AS review_id,
			    pr.rating AS review_rating,
			    pr.comment AS review_comment,
			    c.id AS customer_id,
			    c.name AS customer_name,
			    c.picture AS customer_picture
			FROM product_reviews pr
			JOIN customers c ON pr.customer_id = c.id
			WHERE pr.product_id = '".$id."'";

		    $reviews = $db->directQuery($query);

		    echo json_encode([
		        "status" => 200,
		        "data" =>[ "pictures" => $pictures,
		        						"reviews" => $reviews,
		        						"details" => $details
		        					]
		    	]);
		}
		else
		{
		    echo json_encode(["status" => 500]);
		}
	}


	if(isset($_POST['rate']) AND $_POST['rate'])
	{
		$rating = $_POST['rate'];
		$review = $_POST['review'];
		$proId = $_POST['proId'];

		$user = $db->fetchWhere("customers", "user_id", $user_id, "id");
		$product = $db->fetchWhere("products", "product_id", $proId, "id");
		foreach($user as $val)
		{
			$id = $val['id'];
		}
		foreach($product as $val)
		{
			$pro_id = $val['id'];
		}

		$where = [
			['field' => 'customer_id', 'operator' => '=', 'value' => $id],
			['field' => 'product_id', 'operator' => '=', 'value' => $pro_id]
		];
		$check = $db->selectWhere("product_reviews", ["*"], $where);

		if(!empty($check))
		{
			exit;
		}
		$data = [
			"rating" => $rating,
			"comment" => $review,
			"product_id" => $pro_id,
			"customer_id" => $id
		];

		$insert = $db->insert("product_reviews", $data);

		if($insert )
		{
			echo json_encode(200);
		}
		else
		{
			echo json_encode(500);
		}
	}