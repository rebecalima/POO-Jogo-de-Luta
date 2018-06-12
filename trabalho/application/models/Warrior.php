<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH."/models/Jogador.php";
class Warrior extends Jogador{
    
    /*
    * DESCR: O método Warrior() é um construtor que está inserindo aos atributos 
    * herdados da classe Jogador
    * AUTOR: Daniel Pereira Zitei
    * HORAS: 1
    * ENTRADA: Instância da arma, Instância do Escudo, Instância da armadura, nome do jogador, Vida
    * SAÍDA: S/SAÍDA
    */
    public function Warrior($nome, AttackItem $arma, DefenseItem $escudo, DefenseItem $armadura) {
        $this->vidaTotal = 120;
        $this->vidaAtual = 120;
        $this->nome = $nome;
        $this->inventario["arma"] = $arma;
        $this->inventario["escudo"] = $escudo;
        $this->inventario["armadura"] = $armadura;
    }
}
?>