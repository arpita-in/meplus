    <?php  
    defined('BASEPATH') OR exit('No direct script access allowed');  
      
    class Mymodel extends CI_Model {  
      
           
              
         
            function insertinto($modal_data){
                $this->db->insert('test',$modal_data);
                return true;
            } 

            function send($email){
                $this->db->where('email',$email);
                $this->db->select('*');
                $q=$this->db->get('registration');
                if ($q->num_rows()>0) {
                	return true;
                }
                else{return false;}
            }   
    } 

    
    ?>  