<?php

include_once('db_connect.php');

function addPost($data,$consellation) {

	global $db;

	print_r($data);    // $_GET

	//
	$id     = $generate[''];
	$post   = $data['$post'];

	$addPost = "INSERT INTO post VALUE($id, '$post',$consellation);";

	print $addPost;

	$result1 = $db->query($addPost);

	if ($result1 != FALSE) {
		print "<p> You have mande a new post on " . $consellation . " has been added.</p>";
	}
	else {

	}
}

?>
