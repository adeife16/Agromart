<?php
session_start();

$session_id = $_SESSION['user_id'];
require_once '../database.php';

$data = array();
$db = new Database();

 
if(isset($_GET['get']) AND $_GET['get'] == "all")
{
	$fetch = $db->fetch("customers");

	if($fetch)
	{
		echo json_encode(["status" => 200, "data" => $fetch]);
	}
	else
	{
		echo json_encode(["status" => 500]);
	}
	exit;
}

if(isset($_POST['disable']) AND $_POST['disable'] != "")
{
	$id = $_POST['disable'];

	$update = $db->updateWhere("customers", ["status"], ["Disabled"], "user_id", $id);

	if($update)
	{
		echo json_encode(200);
	}
	else
	{
		echo json_encode(500);
	}
	exit;
}


if(isset($_POST['enable']) AND $_POST['enable'] != "")
{
	$id = $_POST['enable'];

	$update = $db->updateWhere("customers", ["status"], ["Active"], "user_id", $id);

	if($update)
	{
		echo json_encode(200);
	}
	else
	{
		echo json_encode(500);
	}
	exit;
}