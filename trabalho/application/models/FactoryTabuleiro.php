<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FactoryTabuleiro{
    protected static $arrayCelulas, $obstaculoX, $obstaculoY;
    /*
    * DESCR: O método makeTerreno() cria as instâncias do Terreno de acordo com
    * a quantidade de celulas passada por parametro
    * AUTOR: Rebeca Lima Gomes
    * HORAS: 1
    * ENTRADA: Quantidade de celulas na reta X, Quantidade de celulas na reta Y
    * SAÍDA: S/SAÍDA
    */
    public static function makeTerreno($limiteX, $limiteY){
        self::$arrayCelulas = array();
        for ($x = 0; $x < $limiteX ; $x++){
            for($y = 0; $y < $limiteY; $y++){
                self::$arrayCelulas[$x][$y] = new Terreno($x,$y);
            }
        }
    }
    
}

?>