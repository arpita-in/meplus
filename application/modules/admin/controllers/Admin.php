<?php
	class Admin extends MX_Controller
	{  
		function index()
		{
            if(isset($this->session->userdata['session_data'])){$this->load->view('admin-dashboard');}
            else{redirect('u_registration/login');}
			
		}//end of function index
		public function add_certificate()
		{
			$this->load->model('adminmodel');
			 $input = urldecode(file_get_contents('php://input'));
 
                $received = json_decode($input, true);
 
                $data = array();
                 
 
              
                foreach( $received as $value)
                {
                    $data[$value['name']] = $value['value'];
                }
 
                //var_dump($data);exit;
                 
 
                
                $modal_data = array(
 
                    
                    'title'=>$data['title'],
                    'short_description'=>$data['short_description'],
                    'full_description'=>$data['full_description'],
                    'branch'=>$data['branch'],
                    'cost'=>$data['cost'],
                    'validity'=>$data['validity'],
                    'company'=>$data['company']
                    
                );
 
               /// var_dump($modal_data);exit();
                 $confirm = $this->adminmodel->insertdata($modal_data);
 
 
                if ($confirm) {
                    //$resp['result'] = $row;
                    //var_dump($result);
                    $resp['result'] = "done";

                }else{
                    $resp['error'] = 'error';
                }
                              
                $this->output
                ->set_status_header(200)
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode($resp, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                ->_display();
                exit;

		}//end of function add_certificate
        function search_all_data(){
            $resp = array();
            $this->load->model('adminmodel');
            $input = urldecode(file_get_contents('php://input'));

            $received = json_decode($input, true);

            

            $result = $this->adminmodel->searchalldata();



            $resp['users'] = $result;
                $this->output
                ->set_status_header(200)
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode($resp, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                ->_display();
                exit;
        }
		
	}//end of class
?>
