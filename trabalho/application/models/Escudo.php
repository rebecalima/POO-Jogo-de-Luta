<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH."/models/DefenseItem.php";
        
class Escudo extends DefenseItem {
    /*
    * DESCR: O método Escudo é um método construtor da classe Escudo 
    * que insere os valores respectivos aos atributos herdados da classe abstrata
    * AUTOR: Nathan Caraviello Couto
    * HORAS: 1
    * ENTRADA: Nome do item, Poder de defesa do Escudo
    * SAÍDA: S/SAÍDA
    */
    public function Escudo($nome,$poderDefesa){
        $this->item = $nome;
        $this->poderDefesa = $poderDefesa;
    }

}
?>