<?php
defined('BASEPATH') OR exit('No direct script access allowed');

interface Celula{

    /*
    * DESCR: O método getId() está somente assinado nessa interface,
    * e será sobrescrita para as classes que a implementarem
    * AUTOR: Rebeca Lima Gomes
    * HORAS: 1
    * ENTRADA: S/ENTRADA
    * SAÍDA: S/SAÍDA
    */
    public function getId();
    
    /*
    * DESCR: O método existeObstaculo() está somente assinado nessa interface,
    * e será sobrescrita para as classes que a implementarem
    * AUTOR: Rebeca Lima Gomes
    * HORAS: 1
    * ENTRADA: S/ENTRADA
    * SAÍDA: S/SAÍDA
    */
    public function existeObstaculo();
    
    /*
    * DESCR: O método getImg() está somente assinado nessa interface,
    * e será sobrescrita para as classes que a implementarem
    * AUTOR: Rebeca Lima Gomes
    * HORAS: 1
    * ENTRADA: S/ENTRADA
    * SAÍDA: S/SAÍDA
    */
    public function getImg();
}

?>