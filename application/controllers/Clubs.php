<?php

defined('BASEPATH') OR exit('No direct script access allowed');

	 class Clubs extends CI_Controller {
		 
		public function __construct()
       	{
            parent::__construct();
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
		public function index()
		{
			$data['allclubs'] = $this->club_model->getall();
			$this->load->view('header.php',$data);
			$this->load->view('/pages/viewclubs.php',$data);
		}
	
		public function delete($clubid){
			$this->club_model->delete($clubid);
			$data['allclubs'] = $this->club_model->getall();
			redirect('clubs');
		}
		 
		public function create(){
			$data['club'] = array('club_name'=>'',
						 'league_description'=>'',
						 'club_code'=>'',
						 'contact' => '',
						 'contact_tel' => '',
					     'contact_fax'=>'',
						 'email_addr'=>'',
						 'address_line1'=>'',		 
						 'address_line2'=>'',		 
						 'address_line3'=>'',		 
						 'address_line4'=>'',	
						 'home_colors'=>'',
						 'away_colors'=>''
								 );
			$this->load->view('header.php');
			$this->load->view('/pages/clubadmin.php',$data);			
		}
		 
		 public function add(){
			$data = array(
						'club_name'=>			$this->input->post('club_name'),
						 'contact' => 			$this->input->post('contact'),
						 'contact_tel' => 		$this->input->post('contact_tel'),
					     'contact_fax'=>		$this->input->post('contact_fax'),
						 'email_addr'=>			$this->input->post('email_addr'),
						 'address_line1'=>		$this->input->post('address_line1'),		 
						 'address_line2'=>		$this->input->post('address_line2'),		 
						 'address_line3'=>		$this->input->post('address_line3'),		 
						 'address_line4'=>		$this->input->post('address_line4'),	
						 'home_colors'=>		$this->input->post('home_colors'),
						 'away_colors'=>		$this->input->post('away_colors')				
			);		
			 $this->club_model->addClub($data);
			 redirect('clubs');
		 }
		 
		 public function edit($clubid){
			$data['club'] =  $this->club_model->getClub($clubid);
			$this->load->view('header.php');
			$this->load->view('/pages/clubadmin.php',$data);				 
		 }
		 
		 public function update(){
			$clubid = $this->input->post('club_code');
			$data = array(
						'club_name'=>			$this->input->post('club_name'),
						 'contact' => 			$this->input->post('contact'),
						 'contact_tel' => 		$this->input->post('contact_tel'),
					     'contact_fax'=>		$this->input->post('contact_fax'),
						 'email_addr'=>			$this->input->post('email_addr'),
						 'address_line1'=>		$this->input->post('address_line1'),		 
						 'address_line2'=>		$this->input->post('address_line2'),		 
						 'address_line3'=>		$this->input->post('address_line3'),		 
						 'address_line4'=>		$this->input->post('address_line4'),	
						 'home_colors'=>		$this->input->post('home_colors'),
						 'away_colors'=>		$this->input->post('away_colors')				
			);		 
			 $this->club_model->update($clubid,$data);
			 redirect('clubs');
		 }

	 }
	