<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exemplo1 extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Exemplo1_model');
	}

	public function index(){
		$dados["titulo"] = "Essa é minha primeira view!";
		$dados["conteudo"] = "Texto do conteúdo vem aqui pra ficar show";
		$this->load->view("exemplo1", $dados);
	}

	public function login(){
		$this->Exemplo1_model->salvar();
		// echo "Método executado: login</br>";
		// echo "Parâmetro recebido: ";
		// echo $this->uri->segment(3);
	}
}