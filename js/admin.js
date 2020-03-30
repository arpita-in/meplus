$(document).ready(function(){
 $("#btn").click(function(){
    var base_url='http://localhost/meplus/';
   //alert(base_url);
      var data = JSON.stringify($('#form').serializeArray(this));  

                    $.ajax({
                            type:'POST',
                            url:base_url+'admin/add_certificate',
                            data:data,
                            dataType:'json',
                             })
                  .done(function(json) { 

                            var error = "ERROR OCCURED !! DATA NOT INSERTED ";

                            if (json) {
                              alert("CERTIFICATE ADDED");
                              }
                              else{
                              alert('hgbg');
                            }
                           })//end of done
           .fail(function( xhr, status, errorThrown ) {
                          alert( "Sorry, there was a problem!" );
                          console.log( "Error: " + errorThrown );
                          console.log( "Status: " + status );
                          console.dir( xhr );
                        })//end of fail
    });//end of btn id
 $('#divid').hide();
 $('#add_certificate').click(function(){$('#divid').show();});
 $('#hide').click(function(){$('#divid').hide();});
 $('#hide').hide();
 $('#fff').hide();
 $('#fet').hide();
 $('#fet').click(function(){$('#add_certificate').show();
                                   $('#fetch_data').show();
                                  $('#fff').hide(); });
 $('#add_certificate').click(function(){$('#hide').show();});
 $('#hide').click(function(){$('#hide').hide();});
 $('#fetch_data').click(function(){$('#add_certificate').hide();
                                   $('#fetch_data').hide();});
 $('#fetch_data').click(function(){$('#fff').show();
$('#fet').show();});//end of hide and show!!

//start of fetch data
 $('#fetch_data').click(function(){
  var base_url='http://localhost/meplus/';
  var name = 'abc';
      var data = {'name' : name};
       $('#user_details').empty();

      $.ajax({
            type:'POST',
            url:base_url+'admin/search_all_data',
            data:JSON.stringify(data),
            dataType:'json', 
           
        })
        .done(function( json ) {

          var error = 'Data not found';
          if (json.users) {
            
              var sno = 1;
              var tr_html = '';

            $.each(json.users, function(i, item) {
              var trId = 'tr'+sno;
              tr_html += '<tr id="'+trId+'">\
                          <td>'+sno+'</td>\
                          <td>'+item.username+'</td>\
                          <td>'+item.mobile+'</td>\
                          <td>'+item.dob+'</td>\
                          <td>'+item.user_id+'</td>\
                          <td>'+item.email+'</td>\
                          <td>'+'<button id="delete'+sno+'" onclick="deleteS(\''+trId+'\')" type="button">DELETE</button>'+'</td>\
                          </tr>';
            

            sno = sno +1 ;
          });


            $('#user_details').append(tr_html);

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
      

});//end of fetch data function

//$('#delete1').click(function(){
  //alert("hello");
//});
});//end of ready function

function deleteS(trId){
  $('#'+trId).remove();
}// end of delete function















    










 