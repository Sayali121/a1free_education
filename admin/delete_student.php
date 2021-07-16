<?php
	$u_id=$_GET['u_id'];
	include('conn.php');
	mysqli_query($connection,"delete from `user` where u_id='$u_id'");
	header('location:view_student.php');
?>