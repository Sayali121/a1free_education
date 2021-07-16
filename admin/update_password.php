<?php
include('conn.php');
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];


if($_POST['password']!=$_POST['confirm_password'])
{
	echo "Password and confirm password not match..";
}

mysqli_query($connection, "UPDATE `admin` SET password='$password' where ad_id='1'");

	header('location:profile.php');

?>
	