<?php
	class U_registration extends MX_Controller
	{
		function index()
		{
			$this->load->view('regi_view');
		}
		
		public function regist()
		{	
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			//$c_password=$this->input->post('c_password');
			$email=$this->input->post('email');
			$mobile=$this->input->post('mobile');
			$this->load->model('R_model');
			$this->load->helper('string');
			$data=array(
				'user_id'=>random_string('alnum','16'),
				'user_type'=>2,
				'username'=>$username,
				'password'=>$password,
				//'c_password'=>$c_password,
				'email'=>$email,
				'mobile'=>$mobile
			);
			$checkDuplicate = $this->R_model->checkDuplicate($data['username']);

			if($checkDuplicate == 0)
			{
				$insertData = $this->R_model->insert($data);
				
				/*$insertData = $this->R_model->insert($username,$password);*/
			
				if($insertData)
				{
					echo "registration successful";
					//$this->load->view('registration_successful');
					//redirect('profile');
				}
				else
				{
					$data['errorMsg'] = 'Unable to save user. Please try again';
					$this->load->view('regi_view',$data);
				}
			}
			else
			{
				$data['errorMsg'] = 'User email alreary exists';
				$this->load->view('regi_view',$data);
			
			}


			/*$coco=$this->R_model->insert($username,$password);
			
			if($coco==1)
			{
				$this->load->view('registration_successful');
				//echo "registrarion_successful";
			}
			else
			{
				echo"Something is wrong";
			}
			function registration_successful()
			{
				$this->load->view('registration_successful');
			}*/
		}
		//



		// ********************login part controller begins********************
		public function login()
    {
       $data['title'] = 'login page with sessions';
       $this->load->view('regi_view',$data);
    }
    public function login_validation()
    {
    	
    	       $this->load->library('session');
    		$username = $this->input->post('username');
    		$password = $this->input->post('password');
    		$this->load->model('R_model');
    		$result= $this->R_model->can_login($username,$password);

    		if ($result) {
    			
    			$session_data = array(
    				'user_id'=>$result['user_id'],
    				'user_type'=>$result['user_type'],
    				'username' =>$result['username'],
    				'email'=>$result['email']
    				
    			);
    			$this->session->set_userdata('session_data', $session_data);
    			redirect (base_url().'u_registration/enter');
    		}
    		else{
                 $this->load->library('session');

                $this->session->set_flashdata('error','Your username or password is incorrect!');
    			redirect  (base_url().'u_registration/login');
                }
    	}
    
    
    function enter()
    {
    	if (($this->session->userdata['session_data']['username']!='')&&($this->session->userdata['session_data']['username']!=null)&&($this->session->userdata['session_data']['user_type']==1)) 
    	{
    		//echo "welcome".$this->session->userdata('username');
    		//echo "Admin is logged in...";
    		redirect (base_url().'admin');
    		//echo '<a href="u_registration/logout">LOGOUT</a>';
    	}
    	elseif (($this->session->userdata['session_data']['username']!='')&&($this->session->userdata['session_data']['username']!=null)&&($this->session->userdata['session_data']['user_type']==2)) 
    	{
    		 redirect (base_url().'profile');
    	}
    	else{
    		redirect (base_url().'u_registration/login');
    	}
    }
    function logout()
    {

    	//$this->session->unset_userdata('session_data',$session_data);
    	$this->session->sess_destroy();
    	redirect (base_url().'u_registration/login');
    }
	}
?>
