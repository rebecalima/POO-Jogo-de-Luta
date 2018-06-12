<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH."/models/Celula.php";

class Tabuleiro{
    private $limiteX;
    private $limiteY;
    private $arrayCelulas;
    private $obstaculoX = array();
    private $obstaculoY = array();
    private $jogador1;
    private $jogador2;
    
        
    /*
    * DESCR: O método Tabuleiro() é um método construtor que insere os dados
    * recebidos por parametro nos atributos da classe
    * AUTOR: Rebeca Lima Gomes
    * HORAS: 3
    * ENTRADA: Jogador 1, Jogador 2, Limite de nº de Celulas na reta x, Limite de nº de Celulas na reta y,
    * Array com posições e instâncias, Array de Obstaculos na posição X, Array de Obstaculos na posição Y
    * SAÍDA: S/SAÍDA
    */
    public function Tabuleiro(Jogador $jogador1, Jogador $jogador2, $limiteX, $limiteY, $arrayCelulas, $obstaculoX, $obstaculoY){
        //var_dump($obstaculoX);
        $this->limiteX = $limiteX;
        $this->limiteY = $limiteY;
        $this->arrayCelulas = $arrayCelulas;
        $this->obstaculoX = $obstaculoX;
        $this->obstaculoY = $obstaculoY;
        $this->jogador1 = $jogador1;
        $this->jogador2 = $jogador2;
        $this->insereJogador();
    }
    
    
}

?>  