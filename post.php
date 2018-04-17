<?php

include_once('db_connect.php');

function addPost($title, $data,$consellation,$user) {

	global $db;

	print_r($data);

	$post    = $data['$post'];
	$time    = time();

	$addPost = "INSERT INTO "$constelation"post VALUE("$title", "$post", "$user", "$time");";

	print $addPost;

	$result = $db->query($addPost);

	if ($result != FALSE) {
		print "<p> Your new post on " . $consellation . " has been added .</p>";
	}
	else {

	}
}

//Create Table Post(
//title VARCHAR(128)
//post VARCHAR(512)
//post_id VARCHAR(16)
//user VARCHAR(32)
//time VARCHAR(16)
//PRIMARY KEY(user,time))
?>
