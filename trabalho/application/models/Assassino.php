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
    /*
    * DESCR: O método combater() é chamado pela classe combate após uma ação 
    * do usuário contra o adversário. É feita a soma dos ataques das armas do
    * assassino e retornado a soma
    * AUTOR: Daniel Pereira Zitei
    * HORAS: 1
    * ENTRADA: S/ENTRADA
    * SAÍDA: Soma de Ataque
    */
    public function combater(){
        $somaAtaque = $this->inventario["arma"]->ataque + $this->inventario["arma2"]->ataque;
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
        $defesa = $this->inventario['armadura']->poderDefesa;
        $dano = $ataque - $defesa;
        $this->vidaAtual = $this->registrarDano($dano, $jogadorDefesa, $this->vidaAtual);
    }
}  
?>