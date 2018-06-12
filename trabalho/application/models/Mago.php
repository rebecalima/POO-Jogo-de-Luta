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
    
        /*
    * DESCR: O método combater() é chamado pela classe combate após uma ação 
    * do usuário contra o adversário. É retornado o ataque da arma
    * AUTOR: Daniel Pereira Zitei
    * HORAS: 1
    * ENTRADA: S/ENTRADA
    * SAÍDA: Ataque da arma
    */
    public function combater(){
        $somaAtaque = $this->inventario["arma"]->ataque;
        return $somaAtaque;
    }
}
?>