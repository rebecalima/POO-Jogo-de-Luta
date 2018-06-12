<?php
defined('BASEPATH') OR exit('No direct script access allowed');

abstract class Jogador{
    private $nome;
    private $vidaTotal;
    private $vidaAtual;
    private $posicaoAtual = array();
    private $inventario = array();
    
    /*
    * DESCR: O método RegistraDano() é um método da classe Jogador 
    * que registra o dano causado pela ataque da arma do outro jogador,
    * antes verificando se a vida é menor que o dano, se sim ele chama o método morrer(),
    * se não, irá perder pontos da vida.
    * AUTOR: Nathan Caraviello Couto
    * HORAS: 2
    * ENTRADA: Dano(ataque da arma), jogador de Defesa, vida do Jogador
    * SAÍDA: Vida
    */
    public function registrarDano($dano, $jogadorDefesa, $vida){
        if($vida <= $dano){
            $this->morrer($jogadorDefesa);
        }else{
            $vida -= $dano;
            return $vida;
        }
    }
    
    /*
    * DESCR: O método Morrer() é chamado após um 
    * ataque bem-sucedido do jogador contra o outro. 
    * Este método retornará uma mensagem a ser exibida na tela
    * AUTOR: Nathan Caraviello Couto
    * HORAS: 2
    * ENTRADA: Jogador
    * SAÍDA: Mensagem de Game Over
    */
    public function morrer($jogadorDefesa){
        $msg = $jogadorDefesa ." MORREU!";
        return $msg;
    }