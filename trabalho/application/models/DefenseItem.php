<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH."/models/Item.php";
        
abstract class DefenseItem implements Item {
    private $item;
    private $poderDefesa;
    
    /*
    * DESCR: O método getItem retorna o nome do item
    * AUTOR: Nathan Caraviello Couto
    * HORAS: 1
    * ENTRADA: S/ENTRADA
    * SAÍDA: Nome do item
    */
    public function getItem(){
        return $this->item;
    }
    
    /*
    * DESCR: O método getPoderDefesa() retorna o poder 
    * da defesa do item em pontos
    * AUTOR: Nathan Caraviello Couto
    * HORAS: 1
    * ENTRADA: S/ENTRADA
    * SAÍDA: Poder de defesa
    */
    
    public function getPoderDefesa(){
        return $this->poderDefesa;
    }
}

?>