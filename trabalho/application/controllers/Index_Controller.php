<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Index_Controller extends CI_Controller {
	function __construct() {
	    parent::__construct();
	    $this->load->helper('url');
	}
	
	public function index(){
		$this->load->view('index');
	}
	
	
	public function iniciar(){
		$nome1 = $this->input->post("jogador1");
		$nome2 = $this->input->post("jogador2");
		$personagem1 = $this->input->post("person1"); 
		$personagem2 = $this->input->post("person2"); 
		$this->session->set_userdata("nome1", $nome1);
		$this->session->set_userdata("nome2", $nome2);
		$this->session->set_userdata("personagem1", $personagem1);
		$this->session->set_userdata("personagem2", $personagem2);
		redirect('https://trabalho-garcia-rebecalima.c9users.io/trabalho/index.php/jogo', true);
	}

}

?>