<?php
	session_start();
	require_once '../database.php';

	$db = new Database();

	$email = $_POST['email'];
	$pass = $_POST['pass'];

	if($email != "" AND $pass != "")
	{
		$details = $db->fetchWhere("admins", "email", $email, "*");
		if(!$details)
		{
			echo json_encode(500);
			exit;
		}
		foreach ($details as $val)
		{
			$user_id = $val['user_id'];
			$name = $val['name'];
			$email = $val['email'];
			$pass_hash = $val['password'];
		}
		if($pass == password_verify($pass, $pass_hash))
		{
			session_destroy();
			session_start();
			$_SESSION['user_id'] = $user_id;
			$_SESSION['name'] = explode(" ", $name)[0];
			$_SESSION['email'] = $email;

			echo json_encode(200);
		}
		else
		{
			echo json_encode(500);
			exit;
		}
	}