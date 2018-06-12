<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH."/models/Celula.php";

class Terreno implements Celula{
    private $idTerreno = array();
    
    /*
    * DESCR: O método Obstaculo() é um método construtor que insere 
    * a posicao do obstaculo no tabuleiro no atributo dessa classe
    * AUTOR: Rebeca Lima Gomes
    * HORAS: 1
    * ENTRADA: Posição X, Posição Y
    * SAÍDA: S/SAÍDA
    */
    public function Terreno($x,$y){
        $this->idTerreno["x"] = $x;
        $this->idTerreno["y"] = $y;
    }
    

}

?>