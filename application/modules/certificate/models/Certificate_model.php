<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Certificate_model extends CI_model {


	function save_data($input_data){
			$r = $this->db->insert('info', $input_data);

			if ($r) {
				return true;
			}else{
				return false;
			}
	}//end of function save data


	function search_data($id){
			$this->db->select('*');
			$this->db->where('id', $id);
			$q = $this->db->get('info');

			if ($q->num_rows()>0) {
				return $q->row_array();
			}else{
				return false;
			}

	}//end of function search_data($id)



	function search_all_data(){
			$this->db->select('*');
			
			$q = $this->db->get('hacking');

			if ($q->num_rows()>0) {
				return $q->result_array();
			}else{
				return false;
			}

	}//end of function search_data($id)
	function selectcertificate($branch){
			$this->db->where('branch',$branch);
		    $this->db->select('*');
			
			$q = $this->db->get('certificates');

			if ($q->num_rows()>0) {
				return $q->result_array();
			}else{
				$ab ="no certificates founds";
				return  $ab;
			}
	}
	




}