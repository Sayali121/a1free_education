<?php  
$conn = new mysqli('localhost', 'root', '');  
mysqli_select_db($conn, 'quiz');  
$sql = "SELECT * FROM `question`";  
$setRec = mysqli_query($conn, $sql);  
$columnHeader = '';  
$columnHeader = "ID" . "\t" . "CLASS" . "\t". "SUBJECT" . "\t". "CHAPTER" . "\t". "QUESTION" . "\t". "OPTION1" . "\t". "OPTION2" . "\t"
. "OPTION3" . "\t". "OPTION4" . "\t". "ANSWER" . "\t";  
$setData = '';  
  while ($rec = mysqli_fetch_row($setRec)) {  
    $rowData = '';  
    foreach ($rec as $value) {  
        $value = '"' . $value . '"' . "\t";  
        $rowData .= $value;  
    }  
    $setData .= trim($rowData) . "\n";  
}  
  
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=question.xls");  
header("Pragma: no-cache");  
header("Expires: 0");  

  echo ucwords($columnHeader) . "\n" . $setData . "\n";  
 ?> 
 
