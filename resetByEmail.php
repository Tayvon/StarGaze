
<?php
include_once('db_connect.php');
print_r($_POST);
$email = $_POST['tfEmail'];
$int = rand(10000,100000);
$content1 = "your new password is ";

$add1 = "SELECT * FROM user WHERE uEmail ='$email';";

$result1 = $db->query($add1);
$nRows = $result1->rowCount();
if($result1 != FALSE){
		if($nRows == 0){
		print" you enter a wrong email ";
		}
		else{
		print" you get the new password ";
		print $int;
		$add2 = "UPDATE user SET password = MD5('$int') WHERE uEmail = '$email';";
		$result2 = $db->query($add2);
		}
	}

$content = "your new password is " + (string)$int;

//$to = "zhanse01@gettysburg.edu";
$to = $email;
$subject = "Reset the password ";

$header = "From: $name\r\n";
$result = mail($to, $subject, $content,$header);

if($result ==FALSE){
	echo "<P> Comment was not sent </P>\n";
}
else{
	echo "<P> Comment was sent successfully</P>\n";
}
?>
<HTML>
<HEAD>
<TITLE>Reset password</TITLE>

</HEAD>

<BODY>

<H2>Reset password</H2>

<P>your mail :<?php echo $email;?></P>
<P>your new password :<?php echo $int;?></P>
<BR />

</BODY>

</HTML>
