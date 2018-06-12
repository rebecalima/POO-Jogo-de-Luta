<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FactoryTabuleiro{
    protected static $arrayCelulas, $obstaculoX, $obstaculoY;
    /*
    * DESCR: O método makeTerreno() cria as instâncias do Terreno de acordo com
    * a quantidade de celulas passada por parametro
    * AUTOR: Rebeca Lima Gomes
    * HORAS: 2
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
    
        /*
    * DESCR: O método makeObstaculo() cria as instâncias do Obstaculo de acordo com
    * a quantidade de obstaculos passada por parametro
    * AUTOR: Rebeca Lima Gomes
    * HORAS: 3
    * ENTRADA: Quantidade de obstaculos
    * SAÍDA: S/SAÍDA
    */
    public static function makeObstaculo($qtdObstaculos){
        //self::$arrayObstaculos = array();
        self::$obstaculoX = array();
        self::$obstaculoY = array();
        $i = 0;
        while($i <= $qtdObstaculos){
            $x = rand(0, $qtdObstaculos);
            $y = rand(0, $qtdObstaculos);
            if(self::verificaObstaculo($x, $y, self::$obstaculoX, self::$obstaculoY)){
                self::$obstaculoX[] = $x;
                self::$obstaculoY[] = $y;
                $i++;
                //var_dump($x);
                self::$arrayCelulas[$x][$y] = new Obstaculo($x,$y);

                
            }
        }
    }
    
    /*
    * DESCR: O método verificaObstaculo() tem a função de não permitir que 
    * um novo obstaculo seja criado em cima de uma posição que ja existe obstaculo
    * AUTOR: Rebeca Lima Gomes
    * HORAS: 3
    * ENTRADA: Posicao rendomica x, Posicao randomica y, Quantidade de celulas na reta X, Quantidade de celulas na reta Y
    * SAÍDA: Booleano
    */
    public static function verificaObstaculo($x, $y, $obstaculoX, $obstaculoY){
        for($i = 0; $i < count(self::$obstaculoX);$i++){
            if(self::$obstaculoX[$i] == $x && self::$obstaculoY[$i] == $y){
                return false;
            }
        }
        
        return true;
    }
    
}

?>