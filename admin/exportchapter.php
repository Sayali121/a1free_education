<?php 
// Load the database configuration file 
include_once 'dbconfig.php'; 
 
$filename = "chapter_" . date('Y-m-d') . ".csv"; 
$delimiter = ","; 
 
// Create a file pointer 
$f = fopen('php://memory', 'w'); 
 
// Set column headers 
$fields = array('ID', 'CLASS', 'SUBJECT', 'CHAPTER', 'STATUS','CREATED'); 
fputcsv($f, $fields, $delimiter); 
 
// Get records from the database 
$result = $db->query("SELECT * FROM chapter ORDER BY ch_id ASC"); 
if($result->num_rows > 0){ 
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $result->fetch_assoc()){ 
        $lineData = array($row['ch_id'],$row['c_id'], $row['s_id'], $row['chap_name'], $row['status'], $row['created']); 
        fputcsv($f, $lineData, $delimiter); 
    } 
} 
 
// Move back to beginning of file 
fseek($f, 0); 
 
// Set headers to download file rather than displayed 
header('Content-Type: text/csv'); 
header('Content-Disposition: attachment; filename="' . $filename . '";'); 
 
// Output all remaining data on a file pointer 
fpassthru($f); 
 
// Exit from file 
exit();
?>