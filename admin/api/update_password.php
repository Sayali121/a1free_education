<?php
include 'conn.php';
//Update record in database

$u_id = $_POST['u_id'];
$password = SHA1($_POST['password']);


$query = "UPDATE `user` SET `password`='$password' WHERE `u_id`='$u_id'";
if ($connection->query($query)) {
       $msg = array("status" =>1 , "msg" => "Password Updated successfully");
}else {
    echo "Error: " . $query . "<br>" . mysqli_error($connection);
}


$json = $msg;

header('content-type: application/json');
echo json_encode($json);

@mysqli_close($connection);
?>