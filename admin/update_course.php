<?php
include 'conn.php';
$course_id=$_GET['course_id'];

$course_name = $_POST['course_name'];
 $course_code = $_POST['course_code'];
 $eligibility = $_POST['eligibility'];
 $duration = $_POST['duration'];
 $scholarship = $_POST['scholarship'];


mysqli_query($connection, "UPDATE `course` SET course_name='$course_name', course_code='$course_code', eligibility='$eligibility', duration='$duration', scholarship='$scholarship' where course_id='$course_id'");

	header('location:view_course.php');

?>
