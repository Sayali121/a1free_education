<?php
include('conn.php');

   $postdata = file_get_contents("php://input"); 
   $data = json_decode($postdata, true);
$marks = 0;
$attempt=0;
$u_id;
   if (is_array($data)) {
      foreach ($data as $record) {
     $attempted = $record['attempted'];
	 $u_id = $record['u_id'];
	 if($record['result'])
		 $marks++;
	 if($attempted)
		 $attempt++;

        
      }
   }
  
  echo $marks;
  echo $attempt;
       $msg = array("status" =>1 , "msg" => "Profile Updated successfully");



$json = $msg;

header('content-type: application/json');
echo json_encode($json);


mysqli_close($connection);
?>