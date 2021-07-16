<?php
include('conn.php');
 $u_id=$_POST['u_id'];
 
 
// Attempt select query execution
$sql = "SELECT * FROM result where u_id='$u_id'";
if($result = mysqli_query($connection, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
                $temp[]=array(
                "u_id" => $row['u_id'],
				"ch_id" => $row['ch_id'],
                "score" => $row['score'],
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