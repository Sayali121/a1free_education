<?php
//take the values from client as json
$json = file_get_contents('php://input');
//open database connection
include('conn.php');
//take json values into data variable
$data = json_decode($json, true);
//create for loop to put all data into database
foreach ($data as $item) {
//get the json values from client in name and number variable
$u_id = $item['u_id'] ;
$s_id= $item['number'] ;
//make a sql query to store data
$sql="INSERT INTO `result`(u_id,s_id)VALUES ('$u_id', '$s_id')";
$qur=mysqli_query($connection,$sql);

}
//check the database response it is true or false
if($qur){
$json=array("status"=>1,"message"=>"done");
}
else{
$json=array("status"=>0,"message"=>"error");
}
//close the database connection
mysql_close($con);
//set header
header('Content-type: application/json');
//print the result as json object
echo json_encode($json);
?>