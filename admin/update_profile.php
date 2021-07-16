<?php
include 'conn.php';
$name = $_POST['name'];
$email_id = $_POST['email_id'];
$experience = $_POST['experience'];
$skill = $_POST['skill'];

mysqli_query($connection, "UPDATE `admin` SET name='$name', email_id='$email_id', experience='$experience', skill='$skill' where ad_id='1'");

	header('location:profile.php');

?>
