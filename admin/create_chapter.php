<?php
include 'conn.php';

$c_id = $_POST['c_id'];
$s_id = $_POST['s_id'];
$chap_name = $_POST['chap_name'];
$created = date('Y-m-d H:i:s A', time ());

$sql = "INSERT INTO `quiz`.`chapter` (`c_id`, `s_id`, `chap_name`, `status`, `created`) VALUES ('$c_id', '$s_id', '$chap_name', 'Active', '$created')";

if ($connection->query($sql)) {

echo '<script type="text/javascript">'; 
echo 'alert("Chapter Created Successfully.)';
echo 'window.location.href = "view_student.php";';
echo '</script>';

} else {
echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

@mysqli_close($conn);

?>
