<?php
  $host = "ada.cc.gettysburg.edu";
  $dbase = "star_s18";
  $user = "wrigta01";
  $pass = "Temmettwc11";

  try {
    $db = new PDO("mysql:host=$host; dbname=$dbase", $user, $pass);
  }
  catch(PDOException $e){
    die("Error connecting to MySQL server: ".$e->getMessage());
  }
?>
