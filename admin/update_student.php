<?php
include 'conn.php';
$u_id=$_GET['u_id'];

$u_name = $_POST['u_name'];
$u_surname = $_POST['u_surname'];
$contact_no = $_POST['contact_no'];
$course = $_POST['course'];

mysqli_query($connection, "UPDATE `user` SET u_name='$u_name', u_surname='$u_surname', contact_no='$contact_no', course='$course' where u_id='$u_id'");

	header('location:view_student.php');

?>
