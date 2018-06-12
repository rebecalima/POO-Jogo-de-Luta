<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH."/models/Jogador.php";

class Mago extends Jogador{
    /*
    * DESCR: O método Mago() é um construtor que está inserindo aos atributos 
    * herdados da classe Jogador
    * AUTOR: Daniel Pereira Zitei
    * HORAS: 1
    * ENTRADA: Instância da arma, Instância do Escudo, Instância da armadura, nome do jogador, Vida
    * SAÍDA: S/SAÍDA
    */
    public function Mago($nome, AttackItem $arma, DefenseItem $escudo, DefenseItem $armadura) {
        $this->vidaTotal = 80;
        $this->vidaAtual = 80;
        $this->nome = $nome;
        $this->inventario["arma"] = $arma;
        $this->inventario["armadura"] = $armadura;
        $this->inventario["escudo"] = $escudo;
    }
}
?>