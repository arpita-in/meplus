<?php
	class Change_model extends CI_Model
	{
		
		public function changePwd($currpass,$newpass,$confpass,$userid)
		{
			$this->db->select('*');
			$this->db->where('userid',$userid);
			$this->db->where('password',$currpass);
			$q=	$this->db->get('user_registration');
			if($q->num_rows()>0) 
			{
				$data= array(
					'password'=>$newpass
				);
				$this->db->where('userid',$userid);
				$r=$this->db->update('user_registration',$data);
				if($r)
				{
					return true;
				}
				else
				{
					return false;
				}
			}
			else
				{
					return false;
				}

		}







	}
?>