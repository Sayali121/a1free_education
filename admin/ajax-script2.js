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