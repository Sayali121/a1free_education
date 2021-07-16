// ajax script for getting subject data
   $(document).on('change','#c_id', function(){
      var countryID = $(this).val();
      if(countryID){
          $.ajax({
              type:'POST',
              url:'backend-script.php',
              data:{'c_id':countryID},
              success:function(result){
                  $('#s_id').html(result);
                 
              }
          }); 
      }else{
          $('#s_id').html('<option value=""> Select Class </option>');
          $('#ch_id').html('<option value=""> Select Subject </option>'); 
      }
  });
    // ajax script for getting chapter data
   $(document).on('change','#s_id', function(){
      var stateID = $(this).val();
      if(stateID){
          $.ajax({
              type:'POST',
              url:'backend-script.php',
              data:{'s_id':stateID},
              success:function(result){
                  $('#ch_id').html(result);
                 
              }
          }); 
      }else{
          $('#ch_id').html('<option value=""> Select Subject</option>');
          
      }
  });