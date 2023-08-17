<?php
	session_start();
	$user_id = $_SESSION['user_id'];

	require_once '../database.php';

	$db = new Database();

	if(isset($_GET['all']))
	{
		$fetch = $db->fetch("categories");

		if($fetch)
		{
			echo json_encode(["status" => 200, "data" => $fetch]);
		}
		else
		{
			echo json_encode(["status" => 500]);
		}
	}