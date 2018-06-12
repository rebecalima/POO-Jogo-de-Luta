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
     /*
    * DESCR: O método combater() é chamado pela classe combate após uma ação 
    * do usuário contra o adversário. É feita a soma dos ataques das armas do
    * warrior e retornado a soma
    * AUTOR: Daniel Pereira Zitei
    * HORAS: 1
    * ENTRADA: S/ENTRADA
    * SAÍDA: Soma de Ataque
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
        $defesa = $this->inventario['escudo']->poderDefesa + $this->inventario['armadura']->poderDefesa;
        $dano = $ataque - $defesa;
        $this->vidaAtual = $this->registrarDano($dano, $jogadorDefesa, $this->vidaAtual);
    }
    
    /*
    * DESCR: O método getJogador() retorna todos os dados dos atributos em um array
    * AUTOR: Daniel Pereira Zitei
    * HORAS: 1
    * ENTRADA: S/ENTRADA
    * SAÍDA: Array de informações
    */
    public function getJogador(){
        $informacoes = array();
        $informacoes["nome"] = $this->nome;
        $informacoes["posicao"] = $this->getPosicaoAtual();
        $informacoes["elemento"] = "<div id='$this->nome' style='width: 30px; height: 30px; padding:5px; border-radius: 50%; background-color:brown; color:white; font-size:9px;'>$this->nome</div>";
        return $informacoes;
    }
}
?>