<?php

defined('BASEPATH') OR exit('No direct script access allowed');

	 class ctba extends CI_Controller {
		 
		// prepend with _ underscore to make inaccessible
		public function _view($page = 'home')
	 	{
				
			if (! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
			{
				show_404();
			}
	 	
		 $data['title'] = ucfirst($page);
		 $this->load->view('pages/'.$page.'.php',$data);
		}
		 
		// runs automatically
		public function index()
		{
//			echo "oaded";
//			$this->load->model('ctba_user');
//			$data['allusers'] = $this->ctba_user->getall();
//			$this->load->view('/pages/ctbaadmin.php',$data);
			$this->load->view('/pages/ctbaadmin.php');
		}
	
		
		function _private(){
		}
	 }
	