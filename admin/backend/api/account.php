<?php
	session_start();
	$user_id = $_SESSION['user_id'];

	require_once '../database.php';

	$db = new Database();

	if(isset($_GET['getacc']))
	{
		$details = $db->fetchWhere("customers", "user_id", $user_id, "*");

		if(!empty($details))
		{
			unset($details[0]["password"]); // Assuming "password" is in the associative array
			echo json_encode(["status" => 200, "data" => $details[0]]);
		}
		else
		{
			echo json_encode(["status" => 500]);
		}
	}


	if (isset($_POST['fname']))
	{
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];

		$updateFields = ["name"];
		$updateValues = [$fname . " " . $lname];

		if (isset($_FILES['picture']['name']) && $_FILES['picture']['name'] !== "")
		{
			$upload = image_upload('picture', $user_id);

			$photo_ext = pathinfo($_FILES['picture']['name'], PATHINFO_EXTENSION);
			if ($photo_ext === 'jpeg')
			{
				$photo_ext = 'jpg';
			}
			$photo = $user_id . "." . $photo_ext;

			$updateFields[] = "picture";
			$updateValues[] = $photo;
		}

		$update = $db->updateWhere("customers", $updateFields, $updateValues, "user_id", $user_id);

		if ($update)
		{
			echo json_encode(200);
		}
		else
		{
			echo json_encode(500);
		}
	}

	function image_upload($filename, $rider_id)
	{
	  $allowed_ext = ["jpg","jpeg","png"]; // These will be the only file extensions allowed
	  $uploadDirectory = "../../images/profile_picture/";
	  $fileName = $_FILES[$filename]['name'];
	  $fileSize =$_FILES[$filename]['size'];
	  $fileTmpName =$_FILES[$filename]['tmp_name'];
	  $file_type=$_FILES[$filename]['type'];
	  $error = $_FILES[$filename]['error'];
	  $tmp = explode('.',$fileName);
	  $fileExtension=strtolower(end($tmp));
	  $newName = $rider_id . "." . $fileExtension;
	  $uploadPath = $uploadDirectory . $newName;

	  // if ($fileSize > 1000000)
	  // {

	  //   return "large";

	  // }

	  if (!in_array($fileExtension, $allowed_ext))
	  {
	    return "invalid";
	  }
	  else
	  {
	    if ($error == 0)
	    {

	      if (move_uploaded_file($fileTmpName , $uploadPath))
	      {
	        return "success";
	      }
	      else
	      {
	        return $error ;
	      }
	    }
	    else
	    {
	      return $error;
	    }

	  }

	}