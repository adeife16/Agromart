<?php
session_start();

$session_id = $_SESSION['user_id'];
require_once '../database.php';

$data = array();
$db = new Database();


if(isset($_GET['getStat']))
{
  $year = date('Y');
  $month = date('m');
  $today = date('Y-m-d');
  $year_start = $year . '-' . '01-01';
  $year_end = $year . '-' . '12-31';
  $month_start = $year . '-' . $month . '-01';
  $month_end = $year . '-' . $month . '-31';

  	$products = $db->fetch("products");
  	$customers = $db->fetch("customers");

  	$products = count($products);
  	$customers = count($customers);

  $year = $db->directQuery("SELECT * FROM orders WHERE date BETWEEN '$year_start' AND '$year_end' AND status = 'Approved' ");

	$year_total = 0;
	foreach ($year as $val)
	{
		$year_total += intval($val['total']);
	}

  $month = $db->directQuery("SELECT * FROM orders WHERE date BETWEEN '$month_start' AND '$month_end' AND status = 'Approved' ");

	$month_total = 0;
	foreach ($month as $val)
	{
		$month_total += intval($val['total']);
	}

	$data = [
		"status" => "200",
		"year" => $year_total,
		"month" => $month_total,
		"products" => $products,
		"customers" => $customers
	];

	echo json_encode($data);

}


if(isset($_GET['chartdata']))
{
  $year = date('Y');

  for($i=1; $i<=12; $i++)
  {
    $total = 0;
    if($i < 10)
    {
      $i = '0' . $i;
    }
    $start = $year.'-'.$i.'-01';
    $end = $year.'-'.$i.'-31';
    $chart = $db->directQuery("SELECT * FROM orders WHERE date BETWEEN '$start' AND '$end' AND status = 'Approved' ");

    foreach ($chart as  $row)
    {
      $total += $row['total'];
    }
    array_push($data, $total);
  }
  print json_encode($data);
}
