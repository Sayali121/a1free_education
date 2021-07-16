<?php
	$q_id=$_GET['q_id'];
	include('conn.php');
	mysqli_query($connection,"delete from `question` where q_id='$q_id'");
	header('location:view_question.php');
?>