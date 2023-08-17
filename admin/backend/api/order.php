<?php
session_start();

$session_id = $_SESSION['user_id'];
require_once '../database.php';

$data = array();
$db = new Database();

if(isset($_GET['order']))
{
    $selectFields = array(
        'o.order_id',
        'o.total AS order_total',
        'o.date AS order_date',
        'c.name AS customer_name',
        'o.status AS order_status'
    );

    $joins = array(
        array(
            'type' => 'INNER',
            'table' => 'customers c',
            'on' => 'o.customer_id = c.user_id'
        )
    );

    $whereClauses = array();

    $result = $db->selectWhereJoin('orders o', $selectFields, $joins, $whereClauses);

    if(!empty($result))
    {
        echo json_encode(["status" => 200, "data" => $result]);
    }
    else
    {
        echo json_encode(500);
    }
}

if(isset($_POST['approve']) AND $_POST['approve'] != "")
{
    $id = $_POST['approve'];

    $approve = $db->updateWhere("orders", ["status"], ["Approved"], "order_id", $id);
    if($approve)
    {
        echo json_encode(200);
    }
    else
    {
        echo json_encode(500);
    }
    exit;
}

if(isset($_POST['reject']) AND $_POST['reject'] != "")
{
    $id = $_POST['reject'];

    $approve = $db->updateWhere("orders", ["status"], ["Rejected"], "order_id", $id);
    if($approve)
    {
        echo json_encode(200);
    }
    else
    {
        echo json_encode(500);
    }
    exit;
}
