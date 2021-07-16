<?php
include('conn.php');

 $course_name = $_POST['course_name'];
 $course_code = $_POST['course_code'];
 $eligibility = $_POST['eligibility'];
 $duration = $_POST['duration'];
 $scholarship = $_POST['scholarship'];

$course_created = date('Y-m-d H:i:s A', time ());

$sql = "INSERT INTO `course` (`course_name`, `course_code`, `eligibility`, `duration`, `scholarship`) VALUES ('$course_name', '$course_code', '$eligibility', '$duration', '$scholarship')";

if ($connection->query($sql)) {

echo '<script type="text/javascript">'; 
echo 'alert("Course Successfully Added.");';
echo 'window.location.href = "view_course.php";';
echo '</script>';

} else {
echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

@mysqli_close($connection);

?>
