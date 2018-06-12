<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH."/models/DefenseItem.php";

class Armadura extends DefenseItem {
    /*
    * DESCR: O método Armadura é um método construtor da classe Armadura 
    * que insere os valores respectivos aos atributos herdados da classe abstrata
    * AUTOR: Nathan Caraviello Couto
    * HORAS: 1
    * ENTRADA: Nome do item, Poder de defesa do Armadura
    * SAÍDA: S/SAÍDA
    */
    public function Armadura($nome,$poderDefesa){
        $this->item = $nome;
        $this->poderDefesa = $poderDefesa;
    }
}
?>