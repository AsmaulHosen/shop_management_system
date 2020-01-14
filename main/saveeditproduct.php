<?php
// database connect
include('../connect.php');

// new data add
$id = $_POST['memi'];
$a = $_POST['code'];
$b = $_POST['name'];
$d = $_POST['price'];
$e = $_POST['salesman'];
$f = $_POST['qty']; // left qnty
$g = $_POST['o_price']; 
$h = $_POST['profit'];
$i = $_POST['receive_date'];
$j = $_POST['sold']; // sold


// find that quantity left for the id
$quantity_left=0;

$getUsers = $db->prepare("select * from  products where product_id='".$id."'");
$getUsers->execute();
$users = $getUsers->fetchAll();
foreach ($users as $user) {
    if($user['qty_sold']==$j){
	   $quantity_left=$user['qty'];
	}else{
	   $quantity=($j-$user['qty_sold'] );
	   $quantity_left=$user['qty']+$quantity;
	}
}

// query for update
$sql = "UPDATE products 
        SET product_name=?, pro_band_name=?, price=?, salesman=?, qty=?, o_price=?, profit=?, receive_date=?, qty_sold=?
		WHERE product_id=?";
$q = $db->prepare($sql);

// data execute
$q->execute(array($a,$b,$d,$e,$quantity_left,$g,$h,$i,$j,$id));
header("location: products.php");

?>