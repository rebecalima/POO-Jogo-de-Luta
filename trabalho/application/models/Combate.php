<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Combate{
    private $jogador1;
    private $jogador2;
    
    /*
    * DESCR: O método combate() é um método construtor que insere dois jogadores em combate
    * AUTOR: Nathan Caraviello Couto
    * HORAS: 2
    * ENTRADA: Jogador de Defesa, Jogador de Ataque
    * SAÍDA: S/SAÍDA
    */
    public function Combate(Jogador $jogador1, Jogador $jogador2){
        $this->jogador1 = $jogador1;
        $this->jogador2 = $jogador2;
    }
    
    /*
    * DESCR: O método getJogador1() retorna a instância do jogador 1 na batalha
    * AUTOR: Nathan Caraviello Couto
    * HORAS: 2
    * ENTRADA: S/ENTRADA
    * SAÍDA: Instância do Jogador 1
    */
    public function getJogador1(){
        return $this->jogador1;
    }
    
    /*
    * DESCR: O método getJogador2() retorna a instância do jogador 2 na batalha
    * AUTOR: Nathan Caraviello Couto
    * HORAS: 2
    * ENTRADA: S/ENTRADA
    * SAÍDA: Instância do Jogador 2
    */
    public function getJogador2(){
        return $this->jogador2;
    }
    
}

?>