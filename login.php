<?php

include_once('db_connect.php');

//print_r($_POST);

	$username = $_POST['username'];
	$password = $_POST['password'];

	
	$log = "SELECT * FROM user WHERE username ='$username' AND password = MD5('$password');";

	//print $log. "\n";

	$result = $db->query($log);
	$nRows = $result->rowCount();

	if($result != FALSE){
		if($nRows == 1){
			//header("Location:");
		print"<p> user " . $username . " has been logged in.</p>";
		}
		else{
		print " check your user name or password ";
		}
	}
	else{
		print " check your user name or password ";
	}
?>
