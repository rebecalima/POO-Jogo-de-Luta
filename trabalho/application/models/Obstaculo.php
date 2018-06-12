<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH."/models/Celula.php";

class Obstaculo implements Celula{
    private $idObstaculo = array();
    
    /*
    * DESCR: O método Obstaculo() é um método construtor que insere 
    * a posicao do obstaculo no tabuleiro no atributo dessa classe
    * AUTOR: Rebeca Lima Gomes
    * HORAS: 1
    * ENTRADA: Posição X, Posição Y
    * SAÍDA: S/SAÍDA
    */
    public function Obstaculo($x,$y){
        $this->idObstaculo["x"] = $x;
        $this->idObstaculo["y"] = $y;
    }
    /*
    * DESCR: O método getImg() retorna a imagem que será usada na tela 
    * para a célula Obstaculo
    * AUTOR: Rebeca Lima Gomes
    * HORAS: 1
    * ENTRADA: S/ENTRADA
    * SAÍDA: Caminho da Imagem
    */
    public function getImg(){
        echo "gray";
    }
    
    /*
    * DESCR: O método existeObstaculo() retorna um booleano indicando 
    * se é a celula referida é um obstaculo ou não
    * AUTOR: Rebeca Lima Gomes
    * HORAS: 1
    * ENTRADA: S/ENTRADA
    * SAÍDA: Booleano
    */
    public function existeObstaculo(){
        return true;
    }
        
    /*
    * DESCR: O método getId() retorna a posição do Obstaculo no tabuleiro
    * AUTOR: Rebeca Lima Gomes
    * HORAS: 1
    * ENTRADA: S/ENTRADA
    * SAÍDA: Posição do Obstaculo
    */
    public function getId(){
        return $this->idObstaculo;
    }
 
}

?>