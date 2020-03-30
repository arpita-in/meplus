<?php
class Change_password extends MX_Controller
{
 
	public function index()
	{
		if(isset($this->session->userdata['session_data']))
		{
			$this->load->view('change_pass_view');
		}
		else
		{
			redirect (base_url().'u_registration/login');
		}
	}


	public function updatePwd()
	{
		$currpass=$this->input->post('curr_password');
		$newpass=$this->input->post('new_password');
		$confpass=$this->input->post('conf_password');
		$this->load->model('Change_model');
		//$username="hanu";
		$userid=$this->session->userdata['session_data']['userid'];
			if ($newpass == $confpass ) 
			{
				$result=$this->load->Change_model->changePwd($currpass,$newpass,$confpass,$userid);
				if($result)
				{
					echo $result.'yes';
				}
				else
				{
					echo $result.'no';
				}

			}
			else
			{
				echo "New password and Confirm password is not matched";	
			}
	}
		
}

	

?>
