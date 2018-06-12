<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH."/models/Item.php";

abstract class AttackItem implements Item {
    private $item;
    private $ataque;
    private $alcance;
    
    /*
    * DESCR: O método getItem() retorna o nome do Item
    * AUTOR: Nathan Caraviello Couto
    * HORAS: 1
    * ENTRADA: S/ENTRADA
    * SAÍDA: Nome do item
    */
    public function getItem(){
        return $this->item;
    }
    
    /*
    * DESCR: O método ataque() retorna o ataque, em pontos, do Item
    * AUTOR: Nathan Caraviello Couto
    * HORAS: 1
    * ENTRADA: S/ENTRADA
    * SAÍDA: Ataque do item
    */
    public function ataque(){
        return $this->ataque;
    }
    
    /*
    * DESCR: O método getAlcance() retorna o alcance do Item, ou seja,
    * qual é o alcance dela ao atacar em relação ao outro jogador
    * AUTOR: Nathan Caraviello Couto
    * HORAS: 1
    * ENTRADA: S/ENTRADA
    * SAÍDA: Alcance do item
    */
    public function getAlcance(){
        return $this->alcance;
    }
}

?>