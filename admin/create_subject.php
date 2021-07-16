<?php
include 'conn.php';

$c_id = $_POST['c_id'];
$subject_name = $_POST['subject_name'];
$created = date('Y-m-d H:i:s A', time ());

$sql = "INSERT INTO `quiz`.`subject` (`c_id`, `subject_name`, `created`) VALUES ('$c_id', '$subject_name', '$created')";

if ($connection->query($sql)) {
/*
echo '<script type="text/javascript">'; 
echo 'alert("Class Created Successfully.)';
echo 'window.location.href = "view_student.php";';
echo '</script>';*/

} else {
echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

@mysqli_close($conn);

?>
