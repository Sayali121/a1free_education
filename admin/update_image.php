<?php
include 'conn.php';
//Update record in database
$file_path = "admin/";

$file_path = $file_path . basename( $_FILES['profile_image']['name']);
$imagepath="http://localhost/Quiz/Quiz/".$file_path;
$query = "UPDATE `admin` SET `profile_image`='$imagepath' WHERE `ad_id`=1";
if ($connection->query($query)) {
if(move_uploaded_file($_FILES['profile_image']['tmp_name'], $file_path)) 
		{
      header('location:profile.php');
echo '<script type="text/javascript">'; 
echo 'alert("Image Updated Successfully.");';
echo 'window.location.href = "profile.php"';
echo '</script>';
}}else {
    echo "Error: " . $query . "<br>" . mysqli_error($connention);
}


@mysqli_close($conn);
?>