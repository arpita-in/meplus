<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends  MX_Controller  {

	
		public function index ()
		{
			
			$this->load->view('index');
		}
		
	}