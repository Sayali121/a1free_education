<?php
include 'conn.php';

$c_id = $_POST['c_id'];
$s_id = $_POST['s_id'];
$ch_id = $_POST['ch_id'];
$repeated = $_POST['repeated'];
$question = $_POST['question'];
$option1 = $_POST['option1'];
$option2 = $_POST['option2'];
$option3 = $_POST['option3'];
$option4 = $_POST['option4'];
$answer = $_POST['answer'];
$created = date('Y-m-d H:i:s A', time ());

$sql = "INSERT INTO `quiz`.`question` (`c_id`, `s_id`, `ch_id`, `repeated`, `question`, `option1`,  `option2`, `option3`,`option4`,`answer`,`created`) VALUES 
('$c_id', '$s_id', '$ch_id', '$repeated', '$question','$option1', '$option2','$option3', '$option4','$answer','$created')";

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
