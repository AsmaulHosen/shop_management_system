<?php
session_start();
include('../connect.php');
$invoice = $_POST['invoice'];
$cashier = $_POST['cashier'];
$date = $_POST['date'];
$ptype = $_POST['ptype'];
$amount = $_POST['amount'];
$profit = $_POST['profit'];
$cname = $_POST['cname'];
$contact = $_POST['contact'];
$address = $_POST['address'];

if($ptype=='cash') {
	$f = $_POST['cash'];
	$sql = "INSERT INTO sales (invoice_number,cashier,date,type,amount,profit,tk_access,name) VALUES (:invoice,:cashier,:date,:ptype,:amount,:profit,:f,:g)";
	$q = $db->prepare($sql);
	$q->execute(array(':invoice'=>$invoice,':cashier'=>$cashier,':date'=>$date,':ptype'=>$ptype,':amount'=>$amount,':profit'=>$profit,':f'=>$f,':g'=>$cname));
	
	$sql = "INSERT INTO customer (customer_name,contact,address,invoice_number,date,amount) VALUES (:cname,:contact,:address,:invoice,:date,:amount)";
	$q = $db->prepare($sql);
	$q->execute(array(':cname'=>$cname,':contact'=>$contact,':address'=>$address,':invoice'=>$invoice,':date'=>$date,':amount'=>$amount));
	
	header("location: preview.php?invoice=$invoice");
	exit();
	
}
// query



?>