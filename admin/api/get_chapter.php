<?php
include('conn.php');
 $s_id=$_POST['s_id'];
 
 
// Attempt select query execution
$sql = "SELECT * FROM chapter inner join subject on subject.s_id = chapter.s_id";
if($result = mysqli_query($connection, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
                $temp[]=array(
                "class" => $row['c_id'],
				"Subject" => $row['subject_name'],
                "chapter" => $row['chap_name'],
				
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