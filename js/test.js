$(document).ready(function(){
 $("#buttonid").click(function(){
    var base_url='http://localhost/meplus/';
   //alert(base_url);
      var data = JSON.stringify($('#formid').serializeArray(this));  

                    $.ajax({
                            type:'POST',
                            url:base_url+'test/myfun',
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
});
















 