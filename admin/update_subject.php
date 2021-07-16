<?php
include 'conn.php';
$s_id=$_GET['s_id'];
$c_id = $_POST['c_id'];
$subject_name = $_POST['subject_name'];


mysqli_query($connection, "UPDATE `quiz`.`subject` SET c_id='$c_id',subject_name='$subject_name' where s_id='$s_id'");

	header('location:view_subject.php');

?>
