<?php
	$ch_id=$_GET['ch_id'];
	include('conn.php');
	mysqli_query($connection,"delete from `chapter` where ch_id='$ch_id'");
	header('location:view_chapter.php');
?>