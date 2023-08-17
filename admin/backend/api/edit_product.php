<?php
session_start();

$session_id = $_SESSION['user_id'];
require_once '../database.php';

$data = array();
$db = new Database();

if(isset($_POST['edit']) AND $_POST['edit'] != "")
{
	$data = $_POST['edit'];
	$pro_id = $data['proId'];
	$name = $data['name'];
	$cat = $data['cat'];
	$price = $data['price'];
	$desc = $data['desc'];

	$fields = ["category_id", "name", "price", "description"];
	$values = [$cat, $name, $price, $desc];

	$update = $db->updateWhere("products", $fields, $values, "product_id", $pro_id);

	if($update)
	{
		echo json_encode(["status" => 200] );
	}
	else
	{
		echo json_encode(["status" => 500]);
	}
	exit;
}

if(isset($_POST['removePicture']) AND $_POST['removePicture'] != "")
{
	$id = $_POST['removePicture'];

	$file = "../../../images/product/" . $id;

	if(file_exists($file))
	{
		if(unlink($file))
		{
			$delete = $db->deleteWhere("picture", "picture", $id);
			if($delete)
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
}
