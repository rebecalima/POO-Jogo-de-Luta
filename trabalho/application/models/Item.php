<?php
defined('BASEPATH') OR exit('No direct script access allowed');

interface Item {
    /*
    * DESCR: O método getItem()
    * está somente assinado nessa interface, e representa 
    * o acesso ao nome do Item nas classes que o implementam
    * AUTOR: Nathan Caraviello Couto
    * HORAS: 1
    * ENTRADA: S/ENTRADA
    * SAÍDA: S/SAÍDA
    */
  public function getItem();
}

?>