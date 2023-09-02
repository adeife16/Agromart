<?php
	session_start();
	$user_id = $_SESSION['user_id'];

	require_once '../database.php';

	$db = new Database();

if(isset($_GET['all']))
{
	$query = "SELECT 
	    p.id AS product_id,
	    p.product_id AS external_product_id,
	    p.name AS product_name,
	    p.price AS product_price,
	    p.description AS product_description,
	    p.status AS product_status,
	    c.name AS category_name,
	    pic.picture AS product_picture,
	    COALESCE(AVG(pr.rating), 0) AS average_rating
	FROM products p
	JOIN categories c ON p.category_id = c.id
	LEFT JOIN (
	    SELECT product_id, MIN(picture) AS picture
	    FROM picture
	    GROUP BY product_id
	) AS pic ON p.product_id = pic.product_id
	LEFT JOIN product_reviews pr ON p.id = pr.product_id
	GROUP BY p.id";

		$products = $db->directQuery($query);

		if($products)
		{
			echo json_encode(["status" => 200, "data" => $products]);
		}
		else
		{
			echo json_encode(["status" => 500]);
		}
	exit;
}

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


if (isset($_GET['proCat'])) {
    $id = $_GET['proCat'];
    $query = "SELECT 
        p.id AS product_id,
        p.product_id AS external_product_id,
        p.name AS product_name,
        p.price AS product_price,
        p.description AS product_description,
        p.status AS product_status,
        c.name AS category_name,
        pic.picture AS product_picture,
        COALESCE(AVG(pr.rating), 0) AS average_rating
    FROM products p
    JOIN categories c ON p.category_id = c.id
    LEFT JOIN (
        SELECT product_id, MIN(picture) AS picture
        FROM picture
        GROUP BY product_id
    ) AS pic ON p.product_id = pic.product_id
    LEFT JOIN product_reviews pr ON p.id = pr.product_id
    WHERE p.category_id = '" . $id . "'
    GROUP BY p.id"; // Move the GROUP BY clause here

    $products = $db->directQuery($query);

    if ($products) {
        echo json_encode(["status" => 200, "data" => $products]);
    } else {
        echo json_encode(["status" => 500]);
    }
    exit;
}
