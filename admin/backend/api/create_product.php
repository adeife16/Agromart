<?php
session_start();

$session_id = $_SESSION['user_id'];
require_once '../database.php';

$data = array();
$db = new Database();


// save product
if(isset($_POST['create']) AND $_POST['create'] != "")
{
	$pro_id = "product_". str_shuffle(substr(md5(time().mt_rand().time()), 0,20));
	$data = $_POST['create'];
	$name = $data['name'];
	$cat = $data['cat'];
	$price = str_replace(',', '', $data['price']);
	$desc = $data['desc'];
	$date = date('Y-m-d');


	$insertData = array(
		"product_id" => $pro_id,
		"category_id" => $cat,
		"name" => $name,
		"price" => $price,
		"description" => $desc,
	);

	$insert = $db->insert('products', $insertData);

	if($insert)
	{
		$json = array("status" => 200, "data" => $pro_id);
	}
	else
	{
		$json = array("status" => 500);
	}

	echo json_encode($json);

	exit;
}

if(isset($_POST['savepictures']) AND $_POST['savepictures'] != "")
{
  $data = $_POST['savepictures'];
  $product_id = $_POST['id'];
  $error = 0;
  $i = 0;
  $folder = '../../../images/product';
  $width = 1024;
  $height = 1024;
  $date = date('Y-m-d');
  if (!file_exists($folder)) {
      mkdir($folder, 0777, true);
  }	
  $folder = $folder . '/';
  while($i < count($data))
  {
    $pic = $data[$i]['imageData'];
    $pic =base64_decode(end(explode(',',$pic)));
	$name = $product_id .str_shuffle(substr(md5(time().mt_rand().time()), 0,10)). $data[$i]['name'];
    $type = end(explode('.',$data[$i]['name']));

    if(file_put_contents($folder . $name, $pic) != false)
    {
    	$insertData = array(
    		"product_id" => $product_id,
    		"picture" => $name,
    	);
    	// resize image
      if(!resize($folder . $name))
      {
        $json = array("status" => "resize error");
        // print "picture error";
        break;	      	
      }
    }
    else
    {
    	$json = array("status" => "error");
    	break;
    }
  	$insert = $db->insert("picture", $insertData);
  	if($insert)
  	{
  		$json = array("status" => "success");
  	}
  	else
  	{
      	$json = array("status" => "error");
      	break;
  	}
    $i++;
  }
  print json_encode($json);
}

// resize image
function resize($source)
{
  try
  {
    // Dimensions for the resized image
    $newWidth = 400;
    $newHeight = 500;

    // Load the original image
    $sourceImage = imagecreatefromjpeg($source);

    // Get the original image's width and height
    $originalWidth = imagesx($sourceImage);
    $originalHeight = imagesy($sourceImage);

    // Create a new blank image with the desired dimensions
    $newImage = imagecreatetruecolor($newWidth, $newHeight);

    // Resize the original image to the new dimensions
    imagecopyresampled($newImage, $sourceImage, 0, 0, 0, 0, $newWidth, $newHeight, $originalWidth, $originalHeight);

    // Output the resized image
    header('Content-Type: image/jpeg');
    imagejpeg($newImage, $source, 80); // 80 is the image quality (0-100)

    // Clean up memory
    imagedestroy($sourceImage);
    imagedestroy($newImage);
    
    return true;
  }
  catch (Exception $e)
  {
    return false;
  }
}