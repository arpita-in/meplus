<?php
	class Test extends MX_Controller
	{
		function index()
		{
			$this->load->view('Test');
		}//end of function index
        function forget()
        {
           // $this->load->model('mymodel');

            $this->load->view('newview');
        }//end of function forget

        function rec()
        {
            $this->load->model('mymodel');
            $email = $this->input->post('email');
            $result = $this->mymodel->send($email);
            if ($result) {
              echo   "this code works";
            }
            //$this->load->view('newview');
        }//end of function forget
        
		public function myfun()
		{
			$this->load->model('mymodel');
			 $input = urldecode(file_get_contents('php://input'));
 
                $received = json_decode($input, true);
 
                $data = array();
                 
 
              
                foreach( $received as $value)
                {
                    $data[$value['name']] = $value['value'];
                }
 
                //var_dump($data);exit;
                 
 
                
                $modal_data = array(
 
                    
                    'name'=>$data['name']
                   
                    
                );
 
                //var_dump($modal_data);exit();
                 $this->load->model('mymodel');
 
 
                if ($confirm) {
                    //$resp['result'] = $row;
                    //var_dump($result);
                    $resp = true;

                }else{
                    $resp = false;
                }
                              
                $this->output
                ->set_status_header(200)
                ->set_content_type('application/json', 'utf-8')
                ->set_output(json_encode($resp, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES))
                ->_display();
                exit;

		}//end of function add_certificate
		
	}//end of class
?>
