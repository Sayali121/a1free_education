<?php
include('conn.php');
// Fetching state data
$c_id=!empty($_POST['c_id'])?$_POST['c_id']:'';
if(!empty($c_id))
  {
        $contryData="SELECT * from subject WHERE c_id=$c_id";
        $result=mysqli_query($connection,$contryData);
        if(mysqli_num_rows($result)>0)
        {
          echo "<option value=''>Select Subject</option>";
          while($arr=mysqli_fetch_assoc($result))
          {
            echo "<option value='".$arr['s_id']."'>".$arr['subject_name']."</option><br>";
        
          }
        }  
   }
   // Fetching city data
$s_id=!empty($_POST['s_id'])?$_POST['s_id']:'';
if(!empty($s_id))
  {
        $cityData="SELECT * from chapter WHERE s_id=$s_id";
        $result=mysqli_query($connection,$cityData);
        if(mysqli_num_rows($result)>0)
        {
          echo "<option value=''>Select Chapter</option>";
          while($arr=mysqli_fetch_assoc($result))
          {
            echo "<option value='".$arr['ch_id']."'>".$arr['chap_name']."</option><br>";
        
          }
        }  
   }
   
         ?>