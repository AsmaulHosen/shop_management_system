<?php
	$con=mysqli_connect("localhost","root","");
	
	$query="drop database if exists ns_service";
	if(mysqli_query($con,$query)) echo "This database dropped<br/>";
	else echo mysqli_error($con);
	
	$query="create database ns_service";
	if(mysqli_query($con,$query)) echo "</br>ns_service Database Created<br/>";
	else echo mysqli_error($con);
	
	$con=mysqli_connect("localhost","root","","ns_service");
	
	//Table structure for customer
	$query="CREATE TABLE `customer` (
	`customer_id` int(11) NOT NULL AUTO_INCREMENT,
	`customer_name` varchar(100) NOT NULL,
	`address` varchar(100) NOT NULL,
	`contact` varchar(100) NOT NULL,
	`invoice_number` varchar(100) NOT NULL,
	`date` varchar(100) NOT NULL,
	`amount` varchar(100) NOT NULL,
	PRIMARY KEY (`customer_id`)
	)";
	if(mysqli_query($con,$query)) echo "customer Table Created<br/>";
	else echo mysqli_error($con);
	
	//Table structure for products
	$query="CREATE TABLE `products` (
	`product_id` int(11) NOT NULL AUTO_INCREMENT,
	`product_name` varchar(200) NOT NULL,
	`pro_band_name` varchar(200) NOT NULL,
	`o_price` varchar(100) NOT NULL,
	`price` varchar(100) NOT NULL,
	`profit` varchar(100) NOT NULL,
	`salesman` varchar(100) NOT NULL,
	`qty` int(10) NOT NULL,
	`qty_sold` int(10) NOT NULL,
	`receive_date` varchar(500) NOT NULL,
	PRIMARY KEY (`product_id`)
	)";
	if(mysqli_query($con,$query)) echo "products Table Created<br/>";
	else echo mysqli_error($con);
	
	//Table structure for sales
	$query="CREATE TABLE `sales` (
	`transaction_id` int(11) NOT NULL AUTO_INCREMENT,
	`invoice_number` varchar(100) NOT NULL,
	`cashier` varchar(100) NOT NULL,
	`date` varchar(100) NOT NULL,
	`type` varchar(100) NOT NULL,
	`amount` varchar(100) NOT NULL,
	`profit` varchar(100) NOT NULL,
	`tk_access` varchar(100) NOT NULL,
	`name` varchar(100) NOT NULL,
	PRIMARY KEY (`transaction_id`)
	)";
	if(mysqli_query($con,$query)) echo "sales Table Created<br/>";
	else echo mysqli_error($con);
	
	 //Table structure for sales_order
	$query="CREATE TABLE `sales_order` (
	`transaction_id` int(11) NOT NULL AUTO_INCREMENT,
	`invoice` varchar(100) NOT NULL,
	`product` varchar(100) NOT NULL,
	`qty` varchar(100) NOT NULL,
	`amount` varchar(100) NOT NULL,
	`profit` varchar(100) NOT NULL,
	`pro_band_name` varchar(150) NOT NULL,
	`product_name` varchar(200) NOT NULL,
	`price` varchar(100) NOT NULL,
	`discount` varchar(100) NOT NULL,
	`date` varchar(500) NOT NULL,
	PRIMARY KEY (`transaction_id`)
	)";
	if(mysqli_query($con,$query)) echo "sales_order Table Created<br/>";
	else echo mysqli_error($con);
	
	//Table structure for salesman
	$query="CREATE TABLE `salesman` (
	`salesman_id` int(11) NOT NULL AUTO_INCREMENT,
	`salesman_name` varchar(100) NOT NULL,
	`salesman_address` varchar(100) NOT NULL,
	`salesman_contact` varchar(100) NOT NULL,
	`contact_person` varchar(100) NOT NULL,
	`salary` varchar(100) NOT NULL,
	`note` varchar(500) NOT NULL,
	`percentage` varchar(100) NOT NULL,
	`total_amount` varchar(100) NOT NULL,
	PRIMARY KEY (`salesman_id`)
	) ";
	if(mysqli_query($con,$query)) echo "salesman Table Created<br/>";
	else echo mysqli_error($con);
	
	//Table structure for user
	$query="CREATE TABLE `user` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`username` varchar(100) NOT NULL,
	`password` varchar(100) NOT NULL,
	`name` varchar(100) NOT NULL,
	`position` varchar(100) NOT NULL,
	PRIMARY KEY (`id`)
	) ";
	if(mysqli_query($con,$query)) echo "user Table Created<br/>";
	else echo mysqli_error($con);

	$query="INSERT INTO `user` VALUES  ('1', 'admin', 'admin', 'admin', 'admin')";
	mysqli_query($con,$query);
	$query="INSERT INTO `user` VALUES  ('2', 'salesman', 'salesman', 'salesman', 'salesman')";
	mysqli_query($con,$query);
	
	echo "ns_service database complete. now go to <a href='index.php'>main(NS Company)</a> system.  ";
?>