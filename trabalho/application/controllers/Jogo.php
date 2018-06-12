<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jogo extends CI_Controller{
    
    /*
    * DESCR: O método index() chama as informações do banco do model "InformaçãoJogo"
    * constrói os itens,  salva em uma session e chama a função criarJogador
    * AUTOR: Nathan Caraviello Couto
    * HORAS: 2
    * ENTRADA:
    * SAÍDA:
    */
    public function index(){
        $this->load->model("InformacaoJogo");
        $excalibur = $this->InformacaoJogo->excalibur();
        $morningStar = $this->InformacaoJogo->morningStar();
        $cajado = $this->InformacaoJogo->cajado();
        $armaduraGelo = $this->InformacaoJogo->armaduraGelo();
        $armaduraFogo = $this->InformacaoJogo->armaduraFogo();
        $escudo = $this->InformacaoJogo->escudo();

        $this->autoload();

        $excalibur = new Espada($excalibur['nm_Item'],$excalibur['qt_Ataque'],$excalibur['qt_Alcance']);
        $morningStar = new Espada($morningStar['nm_Item'],$morningStar['qt_Ataque'],$morningStar['qt_Alcance']);
        $cajado = new Espada($cajado['nm_Item'],$cajado['qt_Ataque'],$cajado['qt_Alcance']);
        $armaduraGelo = new Armadura($armaduraGelo['nm_Item'],$armaduraGelo['qt_Defesa']);
        $armaduraFogo = new Armadura($armaduraFogo['nm_Item'],$armaduraFogo['qt_Defesa']);
        $escudo = new Escudo($escudo['nm_Item'],$escudo['qt_Defesa']);
        $this->session->set_userdata("excalibur", $excalibur);
        $this->session->set_userdata("morningStar", $morningStar);
        $this->session->set_userdata("cajado", $cajado);
        $this->session->set_userdata("armaduraFogo", $armaduraFogo);
        $this->session->set_userdata("armaduraGelo", $armaduraGelo);
        $this->session->set_userdata("escudo", $escudo);
        $personagem1 = $this->session->userdata('personagem1');
        $personagem2 = $this->session->userdata('personagem2');
        $this->criarJogador($personagem1,$personagem2);
        
    } 
}

?>