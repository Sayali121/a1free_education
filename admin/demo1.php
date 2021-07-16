<?php 
include "conn.php"; // Database connection file
?>

<div class="container">
 
 <form method='post' action='download.php'>
  <input type='submit' value='Export' name='Export'>
 
  <table border='1' style='border-collapse:collapse;'>
    <tr>
     <th>ID</th>
     <th>CLASS</th>
     <th>SUBJECT</th>
	 <th>CHAPTER</th>
	 <th>QUESTION</th>
	 <th>OPTION1</th>
	 <th>OPTION2</th>
	 <th>OPTION3</th>
	 <th>OPTION4</th>
	 <th>ANSWER</th>
    </tr>
    <?php 
     $query = "SELECT * FROM question inner join class inner join chapter inner join subject ORDER BY q_id asc";
     $result = mysqli_query($connection,$query);
     $user_arr = array();
     while($row = mysqli_fetch_array($result)){
      $q_id = $row['q_id'];
      $class = $row['class'];
	  $subject_name = $row['subject_name'];
	  $chap_name = $row['chap_name'];
	  $question = $row['question'];
	  $option1 = $row['option1'];
	  $option2 = $row['option2'];
	  $option3 = $row['option3'];
	  $option4 = $row['option4'];
	  $answer = $row['answer'];
      
      $user_arr[] = array($q_id,$class,$subject_name,$chap_name,$question,$option1,$option2,$option3,$option3,$answer);
   ?>
      <tr>
       <td><?php echo $q_id; ?></td>
       <td><?php echo $class; ?></td>
	   <td><?php echo $subject_name; ?></td>
	   <td><?php echo $chap_name; ?></td>
	   <td><?php echo $question; ?></td>
	   <td><?php echo $option1; ?></td>
	   <td><?php echo $option2; ?></td>
	   <td><?php echo $option3; ?></td>
	   <td><?php echo $option4; ?></td>
       <td><?php echo $answer; ?></td>
      </tr>
   <?php
    }
   ?>
   </table>
   <?php 
    $serialize_user_arr = serialize($user_arr);
   ?>
  <textarea name='export_data' style='display: none;'><?php echo $serialize_user_arr; ?>