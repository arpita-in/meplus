<?php
	class R_model extends CI_Model
	{
		function checkDuplicate($username)
		{
			$this->db->select('username');
			$this->db->from('registration');
			$this->db->like('username', $username);
			return $this->db->count_all_results();
		}


		public function insert($data)
		{
			$result=$this->db->insert('registration', $data);
			/*'registration' is table name*/
			if ($result)
			 {
				return true;
			}
			else
			{
				return false;
			}
			/*$query="INSERT INTO user_info values('$username','$password')";
			$return=$this->db->query($query);
			return $return;*/
		}


		//login page function begins*****

  public function can_login($username,$password)
  {
    $this->db->Where('username',$username);
    $this->db->Where('password' ,$password);
    $query = $this->db->get('registration');
    if ($query->num_rows() > 0 ) {

      return $query->row_array();
    }
    else {
      
      return false;

    }

  }
	}
?>