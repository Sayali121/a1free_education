<?php
include('conn.php');
 $ch_id=$_POST['ch_id'];
 
 
// Attempt select query execution
$sql = "SELECT * FROM question where ch_id='$ch_id' order by RAND()";
if($result = mysqli_query($connection, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
                $temp[]=array(
				"q_id" => $row['q_id'],
                "c_id" => $row['c_id'],
				"s_id" => $row['s_id'],
				"ch_id" => $row['ch_id'],
				"question" => $row['question'],
				"option1" => $row['option1'],
				"option2" => $row['option2'],
				"option3" => $row['option3'],
				"option4" => $row['option4'],
                "answer" => $row['answer'],
				
				);
             
        }
        $user_arr=array(
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