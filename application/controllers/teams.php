<?php

defined('BASEPATH') OR exit('No direct script access allowed');

	 class Teams extends CI_Controller {
		 
		public function __construct()
       	{
            parent::__construct();
            $this->load->model('team_model'); 
			$this->load->model('club_model');
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
		public function view($clubid)
		{
			$data['teams'] = $this->team_model->getTeamsForClub($clubid);
			$data['clubid'] = $clubid;
			$data['club'] =  $this->club_model->getClub($clubid);	
			$this->load->view('header.php',$data);
			$this->load->view('/pages/viewteams.php',$data);
		}
	
		public function delete($leagueid){

			$this->league_model->delete($leagueid);

			$data['allleagues'] = $this->league_model->getall();
			redirect('leagues');
		}
		 
		public function add($clubid){

			$data['league_list'] = $this->team_model->get_dropdown_list($clubid);
			$data['club'] =  $this->club_model->getClub($clubid);			
			$this->load->view('header.php');
			$this->load->view('/pages/teamadmin.php',$data);			
		}
		 
		 
		 public function create(){
			$data['league_code'] =  $this->input->post('league_id');
			$data['club_code'] = $this->input->post('club_code');
			$this->team_model->addTeam($data);
			redirect('Teams/view/'.$data['club_code']);			 
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
	