<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH."/models/Jogador.php";

class Assassino extends Jogador{
    /*
    * DESCR: O método Assassino() é um construtor que está inserindo aos atributos 
    * herdados da classe Jogador
    * AUTOR: Daniel Pereira Zitei
    * HORAS: 1
    * ENTRADA: Instância da primeira arma, Instância da segunda arma, Instância da armadura, nome do jogador, Vida
    * SAÍDA: S/SAÍDA
    */
    public function Assassino($nome,AttackItem $arma, AttackItem $arma2, DefenseItem $armadura) {
        $this->vidaTotal = 100;
        $this->vidaAtual = 100;
        $this->nome = $nome;
        $this->inventario["arma"] = $arma;
        $this->inventario["arma2"] = $arma2;
        $this->inventario["armadura"] = $armadura;
    }
}  
?>