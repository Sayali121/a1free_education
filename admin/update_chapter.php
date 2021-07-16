<?php
include 'conn.php';
$ch_id=$_GET['ch_id'];
$c_id = $_POST['c_id'];
$s_id = $_POST['s_id'];
$chap_name = $_POST['chap_name'];
$status = $_POST['status'];

mysqli_query($connection, "UPDATE `quiz`.`chapter` SET c_id='$c_id',s_id='$s_id',chap_name='$chap_name',status='$status' where ch_id='$ch_id'");

	header('location:view_chapter.php');

?>
