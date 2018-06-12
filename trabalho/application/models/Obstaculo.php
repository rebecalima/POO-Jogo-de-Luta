<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH."/models/Celula.php";

class Obstaculo implements Celula{
    private $idObstaculo = array();
    
    /*
    * DESCR: O método Obstaculo() é um método construtor que insere 
    * a posicao do obstaculo no tabuleiro no atributo dessa classe
    * AUTOR: 
    * HORAS: --
    * ENTRADA: Posição X, Posição Y
    * SAÍDA: S/SAÍDA
    */
    public function Obstaculo($x,$y){
        $this->idObstaculo["x"] = $x;
        $this->idObstaculo["y"] = $y;
    }
 
}

?>