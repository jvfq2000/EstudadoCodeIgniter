<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resultado extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->load->view('include/header');
		$this->load->view('include/menu');
		$this->load->view('resultado');
		$this->load->view('include/footer');
	}
}