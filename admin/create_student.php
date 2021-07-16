<?php
include 'conn.php';


 $u_name = $_POST['u_name'];
 $u_surname = $_POST['u_surname'];
 $contact_no = $_POST['contact_no'];
 $gender = $_POST['gender'];
 $course = $_POST['course'];
 $password = SHA1($_POST['password']);
 $a=substr($u_name,2,2);
 $b=substr($u_surname,2,2);
 $c=substr($contact_no,2,2);
 $d=substr($gender,1,2);
 $e=substr($course,1,2);
 $f=substr($password,1,3);
 $g=$a.$b.$c.$d.$e.$f;
$created = date('Y-m-d H:i:s A', time ());

$sql = "INSERT INTO `user` ( `u_name`, `u_surname`, `contact_no`, `gender`, `course`, `unique_id`, `password`, `created`) VALUES ('$u_name', '$u_surname', '$contact_no', '$gender', '$course', '$g', '$password', '$created')";

if ($connection->query($sql)) {

echo '<script type="text/javascript">'; 
echo 'alert("Student Successfully Added.");';
echo 'window.location.href = "view_student.php";';
echo '</script>';

} else {
echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

@mysqli_close($connection);

?>
