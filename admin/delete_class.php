<?php
	$c_id=$_GET['c_id'];
	include('conn.php');
	mysqli_query($connection,"delete from `class` where c_id='$c_id'");
	header('location:view_class.php');
?>