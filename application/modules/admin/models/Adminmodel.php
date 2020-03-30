    <?php  
    defined('BASEPATH') OR exit('No direct script access allowed');  
      
    class Adminmodel extends CI_Model {  
      
           
              
         function insertdata($modal_data)  
            {  
              
                 $this->db->insert('certificates',$modal_data);
                return true;
            } 
             
             function fetchtabletwo()  
            {  
               //$this->db->where('code', 'code');
                //$q = $this->db->get('mytable');
                $q = $this->db->select('*')->from('mytable')->get();
                return $q->row_array(); 
               // $q = $this->db->get('certificate');
                 //$this->db->insert('certificate',$modal_data);
                //return true;
            } 
            function searchalldata(){
                $q = $this->db->select('*')->from('registration')->get();
                return $q->result_array(); 
            }   
                
    } 

    
    ?>  