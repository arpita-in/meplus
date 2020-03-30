<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Certificate extends  MX_Controller  {
	

	
		
		public function web()
		{	
			
			$this->load->model('certificate_model');
			$branch='web development';
			$result['data'] = $this->certificate_model->selectcertificate($branch);
			if ($result['data']=="no certificates founds") {
				$this->load->view('templating/navbar'/*,$data*/);
				$this->load->view('no_result_found'/*,$data*/);
				$this->load->view('templating/footer'/*,$data*/);
			}
			else{
			$this->load->view('templating/navbar'/*,$data*/);
			$this->load->view('certificate_tiles',$result);
			$this->load->view('templating/footer'/*,$data*/);}


		}//end of web function
		public function hacking()
		{
			$this->load->model('certificate_model');
			$branch= 'hacking';
			$result['data'] = $this->certificate_model->selectcertificate($branch);
			if ($result['data']=="no certificates founds") {
				$this->load->view('templating/navbar'/*,$data*/);
				$this->load->view('no_result_found'/*,$data*/);//echo "<h1>NO CERTIFICATE FOUND</h1>";
				$this->load->view('templating/footer'/*,$data*/);
			}
			else{
			$this->load->view('templating/navbar'/*,$data*/);
			$this->load->view('certificate_tiles',$result);
			$this->load->view('templating/footer'/*,$data*/);}

		}//end of index function
		public function networking()
		{
			$this->load->model('certificate_model');
			$branch= 'networking';
			$result['data'] = $this->certificate_model->selectcertificate($branch);
                if ($result['data']=="no certificates founds") {
				$this->load->view('templating/navbar'/*,$data*/);
				$this->load->view('no_result_found'/*,$data*/);//echo "<h1>NO CERTIFICATE FOUND</h1>";
				$this->load->view('templating/footer'/*,$data*/);
			}
			else{
			$this->load->view('templating/navbar'/*,$data*/);
			$this->load->view('certificate_tiles',$result);
			$this->load->view('templating/footer'/*,$data*/);}


		}//end of index function\
		public function security()
		{
			$this->load->model('certificate_model');
			$branch= 'cyber security';
			$result['data'] = $this->certificate_model->selectcertificate($branch);
			if ($result['data']=="no certificates founds") {
				$this->load->view('templating/navbar'/*,$data*/);
				$this->load->view('no_result_found'/*,$data*/);//echo "<h1>NO CERTIFICATE FOUND</h1>";
				$this->load->view('templating/footer'/*,$data*/);
			}
			else{
			$this->load->view('templating/navbar'/*,$data*/);
			$this->load->view('certificate_tiles',$result);
			$this->load->view('templating/footer'/*,$data*/);}


		}//end of security function		
		public function dataanalytics()
		{
			$this->load->model('certificate_model');
			$branch= 'data analytics';
			$result['data'] = $this->certificate_model->selectcertificate($branch);
			if ($result['data']=="no certificates founds") {
				$this->load->view('templating/navbar'/*,$data*/);
				$this->load->view('no_result_found'/*,$data*/);//echo "<h1>NO CERTIFICATE FOUND</h1>";
				$this->load->view('templating/footer'/*,$data*/);
			}
			else{
			$this->load->view('templating/navbar'/*,$data*/);
			$this->load->view('certificate_tiles',$result);
			$this->load->view('templating/footer'/*,$data*/);}


		}//end of security function		
		public function plls()
		{
			$this->load->model('certificate_model');
			$branch= 'programming languages';
			$result['data'] = $this->certificate_model->selectcertificate($branch);
			if ($result['data']=="no certificates founds") {
				$this->load->view('templating/navbar'/*,$data*/);
				$this->load->view('no_result_found'/*,$data*/);//echo "<h1>NO CERTIFICATE FOUND</h1>";
				$this->load->view('templating/footer'/*,$data*/);
			}
			else
			{
				$this->load->view('templating/navbar'/*,$data*/);
				$this->load->view('certificate_tiles',$result);
				$this->load->view('templating/footer'/*,$data*/);
			}


		}//end of  plls function		
		public function architecturing()
		{
			$this->load->model('certificate_model');
			$branch= 'architecturing';
			$result['data'] = $this->certificate_model->selectcertificate($branch);
			if ($result['data']=="no certificates founds") {
				$this->load->view('templating/navbar'/*,$data*/);
				$this->load->view('no_result_found'/*,$data*/);//echo "<h1>NO CERTIFICATE FOUND</h1>";
				$this->load->view('templating/footer'/*,$data*/);
			}
			else{
			$this->load->view('templating/navbar'/*,$data*/);
			$this->load->view('certificate_tiles',$result);
			$this->load->view('templating/footer'/*,$data*/);}


		}//end of architecturing function		

		public function instrumentation()
		{
			$this->load->model('certificate_model');
			$branch= 'instrumentation';
			$result['data'] = $this->certificate_model->selectcertificate($branch);
			if ($result['data']=="no certificates founds") {
				$this->load->view('templating/navbar'/*,$data*/);
				$this->load->view('no_result_found'/*,$data*/);//echo "<h1>NO CERTIFICATE FOUND</h1>";
				$this->load->view('templating/footer'/*,$data*/);
			}
			else{
			$this->load->view('templating/navbar'/*,$data*/);
			$this->load->view('certificate_tiles',$result);
			$this->load->view('templating/footer'/*,$data*/);
		}

		}//end of instrumentation function		



		
	}//end of class