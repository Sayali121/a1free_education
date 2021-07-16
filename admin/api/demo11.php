<?php
// Creating MySQL connection.
$con = mysqli_connect("localhost","root","","quiz");

// Storing the received JSON in $json.
$json = file_get_contents('php://input');

// Decode the received JSON and store into $obj
$obj = json_decode($json,true);

foreach($obj as $product) : 

  $c_id = $product['c_id'];
  $s_id = $product['s_id'];
  $ch_id = $product['ch_id'];
  $q_id = $product['q_id'];
  $question = $product['question'];
  $option1 = $product['option1'];
  $option2 = $product['option2'];
  $option3 = $product['option3'];
  $option4 = $product['option4'];
  $given_answer = $product['given_answer'];

  if(!empty($productid)) :
    $query = "INSERT INTO result (c_id, s_id, ch_id,q_id,question,option1,option2,option3,option4,given_answer,attempted,result 
   ) VALUES 
('$c_id','$s_id','$ch_id','$q_id','$question','$option1','$option2','$option3','$option4','$given_answer','$attempted','$result')";

    if(mysqli_query($con,$query)){

       // On query success it will print below message.
      $MSG = 'Data Successfully Submitted.' ;

      // Converting the message into JSON format.
      $json = json_encode($MSG);

      // Echo the message.
     echo $json ;

    }
    else{

     echo 'Try Again';

    }
  endif;
endforeach;
?>