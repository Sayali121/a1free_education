<?php
include('conn.php');
 $unique_id=$_POST['unique_id'];
 $password=SHA1($_POST['password']);
// Attempt select query execution
$sql = "SELECT * FROM user inner join class on user.class=class.class where unique_id='$unique_id' AND password='$password'";
if($result = mysqli_query($connection, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
                $user_arr=array(
				"status" => true,
                "message" => "Successfully Login!",
                "data"=> array("u_id" => $row['u_id'],
                "u_name" => $row['u_name'],
				"u_surname" => $row['u_surname'],
				"contact_no" => $row['contact_no'],
				"gender" => $row['gender'],
				"class" => $row['class'],
				"c_id" => $row['c_id'],
				"unique_id" => $row['unique_id'],
				"password" => $row['password']
				)
				);
             
        }
        
        // Free result set
        mysqli_free_result($result);
    } else{
       $user_arr=array(
				"status" => false,
                "message" => "Login Failed!",
                
				);
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
}
 print_r(json_encode($user_arr));
// Close connection
mysqli_close($connection);
?>