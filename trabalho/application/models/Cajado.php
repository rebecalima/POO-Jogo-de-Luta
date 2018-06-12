<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH."/models/AttackItem.php";

class Cajado extends AttackItem {
    /*
    * DESCR: O método Cajado é um método construtor da classe Cajado 
    * que insere os valores respectivos aos atributos herdados da classe abstrata
    * AUTOR: Nathan Caraviello Couto
    * HORAS: 1
    * ENTRADA: Nome do item, Ataque do item, alcance do item
    * SAÍDA: S/SAÍDA
    */
    public function Cajado($nome,$ataque, $alcance){
        $this->item = $nome;
        $this->ataque = $ataque;
        $this->alcance = $alcance;
    }
}

?>