<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH."/models/AttackItem.php";

class Espada extends AttackItem {
    /*
    * DESCR: O método Espada é um método construtor da classe Espada 
    * que insere os valores respectivos aos atributos herdados da classe abstrata
    * AUTOR: Nathan Caraviello Couto
    * HORAS: 1
    * ENTRADA: Nome do item, Ataque do item, alcance do item
    * SAÍDA: S/SAÍDA
    */
    public function Espada($nome, $ataque, $alcance){
        $this->item = $nome;
        $this->ataque = $ataque;
        $this->alcance = $alcance;
    }
    
}

?>