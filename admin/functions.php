<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | Quiz</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>
<body>
<?php
include('connection.php');
$con = getdb();


   if(isset($_POST["Import"])){		
		echo $filename=$_FILES["file"]["tmp_name"];	

		 if($_FILES["file"]["size"] > 0)
		 {
		  	$file = fopen($filename, "r");
	        while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
	           $sql = "INSERT into question (q_id,c_id,s_id,ch_id,question,option1,option2,option3,option4,answer) values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$getData[7]."','".$getData[8]."','".$getData[9]."')";
	           $result = mysqli_query($con, $sql);
			    // var_dump(mysqli_error_list($con));
			    // exit();
				if(!isset($result))
				{
					echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
							window.location = \"view_question.php\"
						  </script>";		
				}
				else {
					  echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"view_question.php\"
					</script>";
				}
	         }
			
	         fclose($file);	
		 }
	}	 
	
	 if(isset($_POST["Export"])){
		 
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('q_id', 'c_id', 's_id', 'ch_id', 'question','option1','option2','option3','option4','answer'));  
      $query = "SELECT * from question ORDER BY q_id DESC";  
      $result = mysqli_query($con, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
	
function get_all_records(){
    $con = getdb();

    $Sql = "SELECT * FROM question";
    $result = mysqli_query($con, $Sql);  

    if (mysqli_num_rows($result) > 0) {
     echo "<table id='mainTable' class='table table-striped'>
     <thead>
     <tr>
     					<th>QUESTION ID</th>
				  		<th>c_id</th>
				  		<th>s_id</th>
				  		<th>ch_id</th>
				  		<th>question</th>
						<th>option1</th>
						<th>option2</th>
						<th>option3</th>
						<th>option4</th>
						<th>answer</th>
                        </tr></thead><tbody>";

     while($row = mysqli_fetch_assoc($result)) {


         echo "<tr><td>" . $row['q_id']."</td>
                   <td>" . $row['c_id']."</td>
                   <td>" . $row['s_id']."</td>
                   <td>" . $row['ch_id']."</td>
                   <td>" . $row['question']."</td>
				   <td>" . $row['option1']."</td>
				   <td>" . $row['option2']."</td>
				   <td>" . $row['option3']."</td>
				   <td>" . $row['option4']."</td>
				   <td>" . $row['answer']."</td></tr>";
         
     }
	//  echo "<tr> <td><a href='' class='btn btn-danger' id='status_btn' data-loading-text='Changing Status..'>Export</a></td></tr>";
     echo "</tbody></table>";
	 
} else {
     echo "you have no recent pending orders";
}
}



?>
</body>
</html>