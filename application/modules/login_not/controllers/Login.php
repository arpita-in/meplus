<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends  MX_Controller  {

	
		public function index ()
		{
			
			$this->load->view('login-view');
		}
		public function login_validation()
   		 {
    	
    	       $this->load->library('session');
    		$username = $this->input->post('username');
    		$password = $this->input->post('password');
    		$this->load->model('loginmodel');
    		$result= $this->loginmodel->can_login($username,$password);

    		if ($result) {
    			
    			$session_data = array(
    				'userid'=>$result['userid'],
    				'user_type'=>$result['user_type'],
    				'username' =>$result['username'],
    				'email'=>$result['email']
    				
    			);
    			$this->session->set_userdata('session_data', $session_data);
    			redirect (base_url().'login/enter');
    		}
    		else{
                 $this->load->library('session');

                $this->session->set_flashdata('error','Your username or password is incorrect!');
    			redirect  (base_url().'login');
                }
    	}
		
	}