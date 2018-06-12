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
    
    /*
    * DESCR: O método criarJogador() entra com 2 personagens recebidos da classe index
    * valida qual o personagem o jogador escolheu e constrói a classe conforme a validação, salva numa session os jogadores e
    * chama a função tabuleiro
    * AUTOR: Daniel Pereira Zitei
    * HORAS: 2
    * ENTRADA:Personagem 1, Personagem 2
    * SAÍDA:
    */
    
    public function criarJogador($personagem1, $personagem2){
        $nome1 = $this->session->userdata("nome1");
        $nome2 = $this->session->userdata("nome2");
        $morningStar = $this->session->userdata("morningStar");
        $armaduraFogo = $this->session->userdata("armaduraFogo");
        $armaduraGelo = $this->session->userdata("armaduraGelo");
        $excalibur = $this->session->userdata("excalibur");
        $escudo = $this->session->userdata("escudo");
        $cajado = $this->session->userdata("cajado");
        
        if($personagem1 == "warrior"){
            $jogador1 = new Warrior($nome1, $morningStar, $armaduraFogo, $escudo);
        }else if($personagem1 == "assassino"){
            $jogador1 = new Assassino($nome1, $excalibur, $excalibur, $armaduraGelo);
        }else if($personagem1 == "mago"){
            $jogador1 = new Mago($nome1, $cajado, $armaduraFogo, $escudo);
        }
        
        if($personagem2 == "warrior"){
            $jogador2 = new Warrior($nome2, $morningStar, $armaduraFogo, $escudo);
        }else if($personagem2 == "assassino"){
            $jogador2 = new Assassino($nome2, $excalibur, $excalibur, $armaduraGelo);
        }else if($personagem2 == "mago"){
            $jogador2 = new Mago($nome1, $cajado, $armaduraFogo, $escudo);
        }
        
        $this->session->set_userdata("jogador1", $jogador1);
        $this->session->set_userdata("jogador2", $jogador2);
        
        $this->tabuleiro();
    }
    
    public function mover(){
        
        $this->autoload();
        
        if($_POST['jogador'] == "jogador1"){
            if($_POST['movimento'] == "direita"){
                $this->session->userdata("jogador1")->movimentarDireita($this->session->userdata("tabuleiro")->getObstaculoX(), $this->session->userdata("tabuleiro")->getObstaculoY());                
            }else if($_POST['movimento'] == "esquerda"){
                $this->session->userdata("jogador1")->movimentarEsquerda($this->session->userdata("tabuleiro")->getObstaculoX(), $this->session->userdata("tabuleiro")->getObstaculoY());                
            }else if($_POST['movimento'] == "cima"){
                //$jogador->movimentarCima();
            }else if($_POST['movimento'] == "baixo"){
                //$jogador->movimentarBaixo();
            }
        }
    }
}

?>