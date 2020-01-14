<?php
	include('../connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM salesman WHERE salesman_id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
?>