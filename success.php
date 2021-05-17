<?php
session_start();
include('connect.php');
$item_no=$_GET['item_number'];
$item_transaction   = $_REQUEST['tx']; // Paypal transaction ID
$item_price         = $_REQUEST['amt']; // Paypal received amount
$item_currency      = $_REQUEST['cc']; // Paypal received currency type

$price = '50.00';
$currency='USD';

//Rechecking the product price and currency details
if($item_price==$price && $item_currency==$currency)
{
$query="insert into transaction_id(transaction_id) values ('$item_transaction')";
$result=mysql_query($query) or die(mysql_error());
echo "<script>alert('Payment successful');window.location.href='index.php';";
echo "</script>";
}
else
{
    echo  "<script>alert('Some error occured. Please try again.');";
echo "</script>";";
}
?>
