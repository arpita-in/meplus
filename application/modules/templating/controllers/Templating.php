<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Templating extends  MX_Controller  {

	
		public function landing ()
		{
			$data=array('module_name'=>'landing');
			$this->load->view(/*'landing-templating'*/'templating-view',$data);
		}
		//public function myfun ()
		/*{
			//$data=array('module_name'=>'landing');
			$this->load->view('index.html');
		}*/
		public function certificate()
		{
			$data=array('module_name'=>'certificate');
			$this->load->view('navbar'/*,$data*/);
			$this->load->view('templating-view',$data);
			

		}
		
		public function u_registration()
		{
			$data=array('module_name'=>'u_registration');
			$this->load->view('templating-view',$data);
		}

		public function admin()
		{
			$data=array('module_name'=>'admin');
			$this->load->view('templating-view',$data);
		}
		public function test()
		{
			$data=array('module_name'=>'test');
			$this->load->view('templating-view',$data);
		}
		public function describe()
		{
			$data=array('module_name'=>'describe');
			$this->load->view('navbar'/*,$data*/);
			$this->load->view('templating-view',$data);
			$this->load->view('footer'/*,$data*/);
		}
		
	}
