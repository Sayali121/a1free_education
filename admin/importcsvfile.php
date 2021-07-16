<?php
// Load the database configuration file
include_once 'dbconfig.php';
 
if(isset($_POST['importSubmit'])){
    
    // Allowed mime types
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    
    // Validate whether selected file is a CSV file
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)){
        
        // If the file is uploaded
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            
            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
            // Skip the first line
            fgetcsv($csvFile);
            
            // Parse data from CSV file line by line
            while(($line = fgetcsv($csvFile)) !== FALSE){
                // Get row data
                $c_id   = $line[0];
                $s_id  = $line[1];
                $ch_id  = $line[2];
				$repeated = $line[3];
                $question = $line[4];
				$option1 = $line[5];
				$option2 = $line[6];
				$option3 = $line[7];
				$option4 = $line[8];
				$answer  = $line[9];
				$created = $line[10];
                
                // Check whether member already exists in the database with the same email
                $prevQuery = "SELECT q_id FROM question WHERE question = '".$line[4]."'";
                $prevResult = $db->query($prevQuery);
                
                if($prevResult->num_rows > 0){
                    // Update member data in the database
                    $db->query("UPDATE question SET c_id = '".$c_id."', s_id = '".$s_id."', ch_id = '".$ch_id."', repeated = '".$repeated."', question = '".$question."', option1 = '".$option1."', option2 = '".$option2."', option3 = '".$option3."', option4 = '".$option4."', answer = '".$answer."', created = NOW() WHERE question = '".$question."'" );
                }else{
                    // Insert member data in the database
                    $db->query("INSERT INTO question (c_id, s_id, ch_id, repeated, question, option1, option2, option3, option4, answer, created) VALUES ('".$c_id."', '".$s_id."', '".$ch_id."','".$repeated."','".$question."','".$option1."','".$option2."','".$option3."','".$option4."','".$answer."',NOW())");
                }
            }
            
            // Close opened CSV file
            fclose($csvFile);
            
            $qstring = '?status=succ';
        }else{
            $qstring = '?status=err';
        }
    }else{
        $qstring = '?status=invalid_file';
    }
}
 
// Redirect to the listing page
header("Location: index.php".$qstring);
?>