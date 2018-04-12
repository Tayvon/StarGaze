<?php

include_once('db_connect.php');

//print_r($_POST);

	$username = $_POST['username']; //use the name of the input field as key to hash table
	$uEmail = $_POST['uEmail'];
	$password = $_POST['password'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];


	//print" \n";

	$reg = "INSERT INTO user (fname, lname, uEmail, username, password) VALUES('" . $fname . "', '" . $lname . "', '" . $uEmail . "', '" . $username . "', '" . MD5($password) . "');";

	//print $reg. "\n";

	$result = $db->query($reg);

	if($result != FALSE){
		print "<p> new user named " . $username . " has been add.</p>";
	}
	else{
		print "<p> Problem encountered during registration </p>";
	}
?>
