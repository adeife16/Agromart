<?php
	require_once '../database.php';

	$db = new Database();

	if(isset($_POST['fname']) AND $_POST['fname'] != "")
	{
	
		$user_id = str_shuffle(substr(md5(time().mt_rand().time()), 0,20));
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$con_pass = $_POST['con_pass'];

		if($pass == $con_pass)
		{
			if(isset($_FILES['picture']['name']) AND $_FILES['picture']['name'] != "")
			{
				$upload = image_upload('picture', $user_id);
			}

			if($upload == "success")
			{
		      $split_name = explode("/", $_FILES['picture']['type']);
		      $photo_ext = $split_name[1];
		      if($photo_ext == 'jpeg')
		      {
		        $photo_ext = 'jpg';
		      }
		      $photo = $user_id.".".$photo_ext;

				$data = array(
					"user_id" => $user_id,
					"name" => $fname. " " .$lname,
					"email" => $email,
					"password" => password_hash($pass, PASSWORD_DEFAULT),
					"picture" => $photo
				);
				$insert = $db->insert("customers", $data);

				if($insert)
				{
					echo json_encode(200);
				}
				else
				{
					echo json_encode(500);
				}
			}

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