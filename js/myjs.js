$(document).ready(function(){
 
    $('#code').change(function(){
 
 
            var data = JSON.stringify($('#id_form').serializeArray(this));
 
 
                     $.ajax({
                            type:'POST',
                            url:'newmodule/form_data',
                            data:data,
                            dataType:'json', 
                            
                        })
                        .done(function( json ) { 
 
                             if (json.result) {
                              //var name= json.result['name'];
                              //$('#datajson_name').text(name);
                              location.href = "http://localhost/project/index.php/templating/branch";


                             }
                             //if(result === "no_errors") location.href = "http://www.google.com"

                             if (json.error) {alert("SELECT ANY OPTION TO PROCEED");}
                          
                            
                        })
                        .fail(function( xhr, status, errorThrown ) {
                           
                          alert( "Sorry, there was a problem!" );
                          console.log( "Error: " + errorThrown );
                          console.log( "Status: " + status );
                          console.dir( xhr );
                        });
    });
 
});//end of function
