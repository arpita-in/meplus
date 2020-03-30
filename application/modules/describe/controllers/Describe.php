<?php
	class Describe extends MX_Controller
	{  
		function index(){
			$this->load->view('describe-view');
			
		}
		function demo()
		{
			echo "hdbvhb";
			
		}//end of function demo
		function demo2()
		{
			$this->load->model('desmodel');
			$fun='demo2';
			$result=$this->desmodel->describecertificate($fun);
			//var_dump($result);
			$id =$result['id'];
			$this->load->view('describe-view',$id);


		}
		
		
	}//end of class
	
?>
