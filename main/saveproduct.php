<?php
	session_start();
	include('../connect.php');
	$code = $_POST['code'];
	$name = $_POST['name'];
	$price = $_POST['price'];
	$salesman = $_POST['salesman'];
	$qty = $_POST['qty'];
	$o_price = $_POST['o_price'];
	$profit = $_POST['profit'];
	$receive_date = $_POST['receive_date'];
	$qty_sold = $_POST['qty_sold'];
	// query
	$sql = "INSERT INTO products (product_name,pro_band_name,price,salesman,qty,o_price,profit,receive_date,qty_sold) VALUES (:code,:name,:price,:salesman,:qty,:o_price,:profit,:receive_date,:qty_sold)";
	$q = $db->prepare($sql);
	$q->execute(array(':code'=>$code,':name'=>$name,':price'=>$price,':salesman'=>$salesman,':qty'=>$qty,':o_price'=>$o_price,':profit'=>$profit,':receive_date'=>$receive_date,':qty_sold'=>$qty_sold));
	//header("location: products.php");
	echo "<script>
		alert('Product information Saved Properly');
		window.location.href='products.php';
		</script>";	
		exit; 
?>