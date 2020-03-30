<?php
class Profile extends MX_Controller
{
 
	public function index()
	{
		if (isset($this->session->userdata['session_data']))
		{
			$this->load->model('profile_model');
			$user_id=$this->session->userdata['session_data']['user_id'];
			//var_dump($user_id);exit;
			$result=$this->profile_model->get_images($user_id);
			/*if($result=$this->load->Profile_model->fetch_p_info($user_id))
			{
			$this->load->view('edit',$result);
			}
			else
			{*/
				//$this->load->view('edit');	
			/*}*/
			//var_dump($user_id);exit;
			//var_dump($images);exit;

				$data = array(
					'file_name'	=>	$result['file_name'],
					'path'=>$result['path']
				);
			if($data)
			{
				$this->load->view('user_dash', $data);
			}
			else
			{
				$this->load->view('user_dash');	
			}
		}
		else
		{
			redirect (base_url().'u_registration/login');
		}


	}
	public function edit()
	{
		if (isset($this->session->userdata['session_data']))

		{
			$this->load->model('profile_model');
			$user_id=$this->session->userdata['session_data']['user_id'];
			//var_dump($user_id);exit;
			$result=$this->profile_model->get_images($user_id);
			/*if($result=$this->load->Profile_model->fetch_p_info($user_id))
			{
			$this->load->view('edit',$result);
			}
			else
			{*/
				//$this->load->view('edit');	
			/*}*/
			//var_dump($user_id);exit;
			//var_dump($images);exit;

				$data = array(
					'file_name'	=>	$result['file_name'],
					'path'=>$result['path']
				);
			if($data)
			{
				$this->load->view('edit', $data);
			}
			else
			{
				$this->load->view('edit');	
			}


		}//End of IF block
		else
		{
			redirect (base_url().'u_registration/login');
		}

	}

//<!--------------------------IMAGE UPLOADING STRAT FROM HERE---------------------------->
function upload_file(){
			
			$this->load->model('profile_model');
			$fname = $this->input->post('file_name');
           	$user_id=$this->session->userdata['session_data']['user_id'];


            $path = '/var/www/html/meplus/uploads/images';
            $image_path='uploads/images';
      
            $new_name = date('ymd') . time();
             
         if (!file_exists($path)) {
	            mkdir($path, 0755, true);
	         }

                $config['upload_path']          = $path;
                $config['allowed_types']        = 'pdf|doc|docx|jpg|jpeg|gif|text|png';
                $config['max_size']             = 4000;
                $config['max_width']            = 3000;
                $config['max_height']           = 1000;
                $config['file_name']            = $new_name;
               
                

                $this->load->library('upload', $config);

                             
               
                if(!$this->upload->do_upload('myfile'))
                {
                        
                        
                        $this->session->set_flashdata('error', $this->upload->display_errors());
                        redirect('profile/edit');
                       // $this->load->view('slider-images-view', $error);
                }
                else
                {
                                                 
                        $image_details = $this->upload->data();
                        $this->load->helper('string');
                        $img_data = array(
                        	'user_id'			=>	$user_id,
                        	'image_id'			=>	random_string('alnum',16),
                        	'image_name'		=>	$fname,	
							'path'				=>	$image_path,
							'file_name'			=>	$image_details['file_name'],
							'upload_time'		=>	date('Y-m-d h:m:s')

                        );

                    //var_dump($img_data);exit;
                        $id_check=$this->profile_model->id_check($img_data['user_id']);
                        if ($id_check) 
                        {
                        	 $result = $this->profile_model->submit_image_details($img_data);
	                        if ($result)
	                        { 
	                           $this->session->set_flashdata('success', 'file uploaded successfully');
	                        }
	                        else
	                        {
	                          $this->session->set_flashdata('error', 'File uploaded but data not saved');
	                        }
                        }
                        else
                        {
                        	$r=$this->profile_model->update($img_data);
                        	$file_status=$path.'/'.$file_name;
                        	if (file_exists($file_status)) 
                        	{
                        		unlink($file_status);
                        	}
                        	else
                        	{
                        		return false;
                        	}
                        }
                   
                    }
                         redirect('profile/edit');

                

	}//end of function upload_file


	public function save_personal_info()
	{
		$f_name=$this->input->post('f_name');

		$l_name=$this->input->post('l_name');
		$email=$this->input->post('email');
		$dob=$this->input->post('dob');
		$this->load->model('Profile_model');
		//$username="hanu";
		$userid=$this->session->userdata['session_data']['userid'];
		$data=array(
			'user_id'=>$userid,
			'first_name'=>$f_name,
			'last_name'=>$l_name,
			'dob'=>$dob,
			'email'=>$email
			
		);
		$result=$this->load->Profile_model->save_p_info($data);

	}

}
?>
