<?php
include 'conn.php';

$u_id = $_POST['u_id'];
$ch_id = $_POST['ch_id'];
$score = $_POST['score'];
$created = date('Y-m-d H:i:s A', time ());


$sql = "INSERT INTO `quiz`.`result` ( `u_id`,`ch_id`, `score`,`created`) 
VALUES ('$u_id', '$ch_id', '$score','$created')";

if ($connection->query($sql)) {
	
	
$msg = array("status" =>true , "msg" => "Your Score saved successfully");
 }else {
echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

$json = $msg;

header('content-type: application/json');
echo json_encode($json);


@mysqli_close($connection);

?>
