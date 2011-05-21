<?php

class Install extends Controller {
	
	public function Install(){
		parent::Controller();
		$this->load->helper('url');
		$this->viewData['cssHref'] = base_url() . 'css/screen.css';
	}
	
	public function index(){
		$this->load->model('SampleDbFactory','sampleDb');	
		$this->viewData['dbName'] = $this->sampleDb->db->database;
		$this->viewData['dbHost'] = $this->sampleDb->db->hostname;
		$this->viewData['dbUser'] = $this->sampleDb->db->username;
		$this->viewData['dbPass'] = $this->sampleDb->db->password;		
		$this->load->view('installwizard', $this->viewData);
	}
	
	public function dbConfigTest(){
		$this->load->model('SampleDbFactory','sampleDb');
	}
	
	public function sample(){
		$this->load->model('SampleDbFactory','sampleDb');
		$created = $this->sampleDb->create();
		if ($created){
			$this->load->view('install_success', $this->viewData);
		}
		else {
			$this->load->view('install_fail', $this->viewData);		
		}
	}
}