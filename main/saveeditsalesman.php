<?php
// configuration
include('../connect.php');

// new data
$id = $_POST['memi'];
$name = $_POST['name'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$cperson = $_POST['cperson'];
$salary = $_POST['salary'];
$note = $_POST['note'];
// query
$sql = "UPDATE salesman 
        SET salesman_name=?, salesman_address=?, salesman_contact=?, contact_person=?,salary=? ,note=?
		WHERE salesman_id=?";
$q = $db->prepare($sql);
$q->execute(array($name,$address,$contact,$cperson,$salary,$note,$id));
//header("location: salesman.php");
	echo "<script>
		alert('Product information Saved Properly');
		window.location.href='salesman.php';
		</script>";	
		exit; 

?>