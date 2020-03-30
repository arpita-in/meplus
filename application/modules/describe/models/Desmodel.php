<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desmodel extends CI_model {

		function describecertificate($fun){
			$this->db->where('fun',$fun);
		    $this->db->select('*');
			
			$q = $this->db->get('certificates');

			if ($q->num_rows()>0) {
				return $q->row_array();
			}else{
				$ab ="no certificates founds";
				return  $ab;
			}
	}
	




}