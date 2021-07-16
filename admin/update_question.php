<?php
include 'conn.php';
$q_id=$_GET['q_id'];
$c_id = $_POST['c_id'];
$s_id = $_POST['s_id'];
$ch_id = $_POST['ch_id'];
$repeated = $_POST['repeated'];
$question = $_POST['question'];
$option1 = $_POST['option1'];
$option2 = $_POST['option2'];
$option3 = $_POST['option3'];
$option4 = $_POST['option4'];
$answer = $_POST['answer'];

mysqli_query($connection, "UPDATE `quiz`.`question` SET c_id='$c_id',s_id='$s_id',ch_id='$ch_id',repeated='$repeated',question='$question',option1='$option1',option2='$option2',option3='$option3',option4='$option4',answer='$answer' where q_id='$q_id'");

	header('location:view_question.php');

?>
