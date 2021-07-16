<?php
include 'conn.php';
//Update record in database

$u_id = $_POST['u_id'];
$u_name = $_POST['u_name'];
$u_surname = $_POST['u_surname'];
$contact_no = $_POST['contact_no'];
$gender = $_POST['gender'];
$password = SHA1($_POST['password']);


$query = "UPDATE `user` SET `u_name`='$u_name' ,`u_surname`='$u_surname',`contact_no`='$contact_no',`gender`='$gender',`password`='$password' WHERE `u_id`='$u_id'";
if ($connection->query($query)) {
       $msg = array("status" =>1 , "msg" => "Record Updated successfully");
}else {
    echo "Error: " . $query . "<br>" . mysqli_error($connention);
}


$json = $msg;

header('content-type: application/json');
echo json_encode($json);

@mysqli_close($conn);
?>