
<?php
include_once('db_connect.php');
print_r($_POST);
$email = $_POST['tfEmail'];
$old = $_POST['tfOld'];
$new = $_POST['tfNew'];

$add1 = "SELECT * FROM user WHERE uEmail ='$email';";
$result1 = $db->query($add1);
$nRows1 = $result1->rowCount();

$add2 = "SELECT * FROM user WHERE password = MD5('$old');";
$result2 = $db->query($add2);
$nRows2 = $result1->rowCount();

if($result1 != FALSE && $result2 != FALSE){
		if($nRows1 == 0){
		print" you enter a wrong email";
		}
		if($nRows2 == 0){
		print" you enter a wrong password";
		}
		else{
		print" you reset password";
		$add3 = "UPDATE user SET password = MD5('$new') WHERE uEmail = '$email';";
		$result3 = $db->query($add3);
		}
	}
?>

<HTML>
<HEAD>
<TITLE>Reset password by oldpassword</TITLE>

</HEAD>

<BODY>

<H2>Reset password</H2>

<P>your mail :<?php echo $email;?></P>
<P>your new password :<?php echo $new;?></P>

<BR />

</BODY>

</HTML>
