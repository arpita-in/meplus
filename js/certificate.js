$(document).ready(function(){

  
  


  $('#hackicndbhgvdng').click(function(){
      var id = $('#id').val();
      //var name = 'abc';
      var data = {"id" : id};

      $('#title').empty();
      $('#description').empty();
      //$('#search_dob').empty();
      $.ajax({
            type:'POST',
            url:base_url+'certificate/search_all_data',
            data:JSON.stringify(data),
            dataType:'json', 
           
        })
        .done(function( json ) { 
          var error = 'Data not found';
          if (json) {

              $('#title').append(json.title);
              $('#description').append(json.description);
              //$('#search_dob').append(json.dob);
            }else{
               $('#error').append(error);
            }          
           
        })
        .fail(function( xhr, status, errorThrown ) {
          
          alert( "Sorry, there was a problem!" );
          console.log( "Error: " + errorThrown );
          console.log( "Status: " + status );
          console.dir( xhr );
        });
      


  });//end of bt form function


  $('#hacking').click(function(){
      
      var name = 'abc';
      var data = {'name' : name};
       $('#stu_data').empty();

      $.ajax({
            type:'POST',
            url:base_url+'search_all_data',
            data:JSON.stringify(data),
            dataType:'json', 
           
        })
        .done(function( json ) { 
          var error = 'Data not found';
          if (json.students) {

              var sno = 1;
              var div_html = '';

            $.each(json.students, function(i, item) {
              
              div_html +='<div class="single-service wow slideInUp">\
                      <span class="fa fa-user-secret service-icon"></span>\
                      <h4 class="service-title">'+item.title'</h4>\
                      <p>'+item.description'</p>\
                      </div>';
            

            sno = sno +1 ;
          });


            $('#stu_data').append(div_html);

          }else{
          
               $('#error').append(error);
          }          
           
        })
        .fail(function( xhr, status, errorThrown ) {
          
          alert( "Sorry, there was a problem!" );
          console.log( "Error: " + errorThrown );
          console.log( "Status: " + status );
          console.dir( xhr );
        });
      


  });//end of bt form function




});//end of ready function 









/*


    var sno = 1;
          var tr_html = '';
            $.each(json.fee_details, function(i, item) {
              
              tr_html += '<tr>\
                            <td>'+sno+'</td>\
                            <td>'+item.fee_name+'</td>\
                            <td>'+item.total_fee_amount+'</td>\
                            <td>'+item.total_col_amount+'</td>\
                            <td>'+item.total_dis_amt+'</td>\
                            <td>'+item.total_due_dis_amt+'</td>\
                            <td>'+item.total_due_amount+'</td>\
                            <td class="text-center"><a class="clr-green" onclick="check_fee_details(\''+item.fee_id+'\',\''+item.fee_name+'\')"><i class="fa fa-eye"></i></a></td>\
                        </tr>'
            sno = sno +1 ;
          });




*/