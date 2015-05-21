<?php

defined('BASEPATH') OR exit('No direct script access allowed');

	 class Leagues extends CI_Controller {
		 
		public function __construct()
       	{
            parent::__construct();
            $this->load->model('league_model');
       	}
		 
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
			$data['allleagues'] = $this->league_model->getall();
			$this->load->view('header.php',$data);
			$this->load->view('/pages/viewleagues.php',$data);
		}
	
		public function delete($leagueid){
			$this->load->model('league_model');
			$this->league_model->delete($leagueid);
			$data['allleagues'] = $this->league_model->getall();
			redirect('leagues');
		}
		 
		public function create(){
			$data['league'] = array('league_name'=>'',
						 'league_description'=>'',
						 'league_code'=>'');
			$this->load->view('header.php');
			$this->load->view('/pages/leagueadmin.php',$data);			
		}
		 
		 public function add(){
			$data = array(
				'league_name' => $this->input->post('league_name'),
				'league_description' => $this->input->post('league_description')
			);		
			 $this->league_model->addLeague($data);
			 redirect('leagues');
		 }
		 
		 public function edit($leagueid){
			$data['league'] =  $this->league_model->getLeague($leagueid);
			$this->load->view('header.php');
			$this->load->view('/pages/leagueadmin.php',$data);				 
		 }
		 
		 public function update(){
			$leagueid = $this->input->post('league_code');
			$data = array(
				'league_name' => $this->input->post('league_name'),
				'league_description' => $this->input->post('league_description')
			);			 
			 $this->league_model->update($leagueid,$data);
			 redirect('leagues');
		 }

	 }
	