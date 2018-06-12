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
    
        /*
    * DESCR: O método defender() é chamado pela classe combate após uma investida do inimigo
    * É feita soma da defesa da armadura e do escudo, gerando a variável defesa.
    * Em seguida a variável dano atribui a subtração entre o ataque e o total de defesa,
    * chamando o metodo registrarDano()
    * AUTOR: Daniel Pereira Zitei
    * HORAS: 3
    * ENTRADA: Ataque da(s) arma(s) do inimigo, Jogador de Defesa
    * SAÍDA: S/SAÍDA
    */
    public function defender($ataque, $jogadorDefesa){
        $defesa = $this->inventario['armadura']->poderDefesa + $this->inventario["escudo"]->poderDefesa;
        $dano = $ataque - $defesa;
        $this->vidaAtual = $this->registrarDano($dano, $jogadorDefesa, $this->vidaAtual);
    }
}
?>