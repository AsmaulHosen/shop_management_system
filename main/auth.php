<?php
	//Start session
	session_start();
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID']) == '')) {
		//header("location: ../index.php");
		echo "<script>
			alert(' Username and Password missing. please go to the login form');
			window.location.href='../index.php';
			</script>";	
			exit; 
		exit();
	}
?>