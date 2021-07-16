<?php
	$s_id=$_GET['s_id'];
	include('conn.php');
	mysqli_query($connection,"delete from `subject` where s_id='$s_id'");
	header('location:view_subject.php');
?>