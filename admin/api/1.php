<?php
include('conn.php');
 $u_id=$_POST['u_id'];

$sql = "SELECT * from result where u_id='$u_id'";
if($result = mysqli_query($connection, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
        $temp[]=array(
         "r_id" => $row['r_id'],
         "u_id" => $row['u_id'],
         "data" => $row['json_decode($data,true)'],
         if (is_array($data)) {
      foreach ($data as $record) {
     $answer = $record['answer'];
     $attempted = $record['attempted'];
     $c_id = $record['c_id'];
     $ch_id = $record['c_id'];
     $given_answer = $record['given_answer'];
     $option1 = $record['option1'];
     $option2 = $record['option2'];
     $option3 = $record['option3'];
     $option4 = $record['option4'];
     $q_id = $record['q_id'];
     $result = $record['result'];
     $s_id = $record['s_id'];			 
	   
      }
   }
}
}
echo $user_arr=array(
	  "status" => true,
                "message" => "Record  Found!",
                "data"=>$temp
                
				);
        // Free result set
        mysqli_free_result($result);
    } else{
       $user_arr=array(
				"status" => false,
                "message" => "Record Not Found!",
                
				);
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 print_r(json_encode($user_arr));
// Close connection
mysqli_close($connection);
?>