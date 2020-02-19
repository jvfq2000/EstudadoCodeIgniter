<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nova_Chapa extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('include/header');
		$this->load->view('include/menu');
		$this->load->view('nova_chapa');
		$this->load->view('include/footer');
	}
}