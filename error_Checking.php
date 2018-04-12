<?php
//Email
include_once('db_connect.php');//Database connection
//  $comp = "moonjo01@gettysburg.edu";//Example for Testing

  $email = $_POST['userEmail'];
 $sql=("SELECT COUNT(email)
        FROM users
        WHERE email='$email'");
  if($db->query(sql)>0)
  {
    echo "<P>The Email Already Exsists within our site</P>\n"; //Username taken
    //Return to the Register page
  }
  elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
  {
	echo "<P>Email is of invalid format</P>\n";
	//Return to the Register page
  }
  else
  {
    echo "<P>Username Allowed</P>\n";
  }

?>
