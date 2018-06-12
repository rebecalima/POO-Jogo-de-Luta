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
    
    /*
    * DESCR: O método mover() recebe o método post da tela, valida a string recebida e chama a controller desejada
    * AUTOR: Rebeca Lima Gomes
    * HORAS: 2
    * ENTRADA:
    * SAÍDA:
    */
    
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
    
    /*
    * DESCR: O método tabuleiro() chama a classe do model e constrói o tabuleiro na tela dentro de uma session
    * AUTOR: Rebeca Lima Gomes
    * HORAS: 2
    * ENTRADA:
    * SAÍDA:
    */
    
    public function tabuleiro(){
        $tabuleiro = FactoryTabuleiro::makeTabuleiro($this->session->userdata("jogador1"), $this->session->userdata("jogador2"));
        $this->session->set_userdata("tabuleiro", $tabuleiro);
        $data["tabuleiro"] = $tabuleiro;
        $this->load->view("jogo", $data);
    }
    
    public function combater($jogador1,$jogador2){
        //new Combate($jogador1,$jogador2);
    }
    
        /*
    * DESCR: O método autoload() carrega os models de fora do ci_model
    * AUTOR: Rebeca Lima Gomes
    * HORAS: 2
    * ENTRADA:
    * SAÍDA:
    */
    
    public function autoload() {
        require_once APPPATH."/models/Espada.php";
        require_once APPPATH."/models/Cajado.php";
        require_once APPPATH."/models/Escudo.php";
        require_once APPPATH."/models/Armadura.php";
        require_once APPPATH."/models/Warrior.php";
        require_once APPPATH."/models/Assassino.php";
        require_once APPPATH."/models/Mago.php";
        require_once APPPATH."/models/FactoryTabuleiro.php";
        require_once APPPATH."/models/Tabuleiro.php";
        require_once APPPATH."/models/Combate.php";  
        require_once APPPATH."/models/Terreno.php";
        require_once APPPATH."/models/Obstaculo.php";
    }
}

?>