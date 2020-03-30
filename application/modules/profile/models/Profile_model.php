<?php
	class Profile_model extends CI_Model
	{
		
		public function save_p_info($data)
		{
			
			$result=$this->db->insert('personal_info', $data);
			
			if ($result)
			 {
				return true;
			}
			else
			{
				return false;
			}


		}

	function submit_image_details($img_data)
	{
	    $result = $this->db->insert('upload_image', $img_data);

	    if ($result) 
	    {
	      return true;
	    }
	    else
	    {
	      return false;
	    }
	}//end of function 

	function get_images($user_id)
	{
	    $this->db->select('*');
	    $this->db->where('user_id',$user_id);
	    $q = $this->db->get('upload_image');

	    if ($q->num_rows()>0)
	    {
	      return $q->row_array();
	    }
	    else
	    {
	      return false;
	    }
	}//end o function 
	
	 public function id_check($user_id)
	{
		$this->db->select('*');
		$this->db->where('user_id',$user_id);
		$query=$this->db->get('upload_image');
		if ($query->num_rows()>0)
	    {
	      return false;
	    }
	    else
	    {
	      return true;
	    }
	}//End of function id_check

	public function update($img_data)
	{
		$r=$this->db->update('upload_image',$img_data);
		if($r)
	    {
	      return true;
	    }
	    else
	    {
	      return false;
	    }
	}

		public function fetch_p_info($user_id)
		{
			$this->db->select('*');
			$this->db->where('user_id',$user_id);
			$q=	$this->db->get('personal_info');
			if($q->num_rows()>0) 
			{
				return $q->row_array();
			}
			else
			{
				return false;
			}
		}





	}//End of the class
?>