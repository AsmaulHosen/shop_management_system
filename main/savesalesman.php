<?php
	session_start();
	include('../connect.php');
	$name = $_POST['name'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$contperson = $_POST['cperson'];
	$salary = $_POST['salary'];
	$note = $_POST['note'];
	// query
	$sql = "INSERT INTO salesman (salesman_name,salesman_address,salesman_contact,contact_person,salary,note) VALUES (:name,:address,:contact,:contperson,:salary,:note)";
	$q = $db->prepare($sql);
	$q->execute(array(':name'=>$name,':address'=>$address,':contact'=>$contact,':contperson'=>$contperson,':salary'=>$salary,':note'=>$note));
	//header("location: salesman.php");

	echo "<script>
			alert('Salesman information Saved Properly');
			window.location.href='salesman.php';
			</script>";	
			exit; 

?>