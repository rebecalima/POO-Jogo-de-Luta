<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH."/models/Celula.php";

class Tabuleiro{
    private $limiteX;
    private $limiteY;
    private $arrayCelulas;
    private $obstaculoX = array();
    private $obstaculoY = array();
    private $jogador1;
    private $jogador2;
    
        
    /*
    * DESCR: O método Tabuleiro() é um método construtor que insere os dados
    * recebidos por parametro nos atributos da classe
    * AUTOR: Rebeca Lima Gomes
    * HORAS: 3
    * ENTRADA: Jogador 1, Jogador 2, Limite de nº de Celulas na reta x, Limite de nº de Celulas na reta y,
    * Array com posições e instâncias, Array de Obstaculos na posição X, Array de Obstaculos na posição Y
    * SAÍDA: S/SAÍDA
    */
    public function Tabuleiro(Jogador $jogador1, Jogador $jogador2, $limiteX, $limiteY, $arrayCelulas, $obstaculoX, $obstaculoY){
        //var_dump($obstaculoX);
        $this->limiteX = $limiteX;
        $this->limiteY = $limiteY;
        $this->arrayCelulas = $arrayCelulas;
        $this->obstaculoX = $obstaculoX;
        $this->obstaculoY = $obstaculoY;
        $this->jogador1 = $jogador1;
        $this->jogador2 = $jogador2;
        $this->insereJogador();
    }
    
    /*
    * DESCR: O método insereJogador() chama outros dois métodos para inserir
    * o Jogador 1 e o Jogador 2
    * AUTOR: 
    * HORAS: --
    * ENTRADA: S/ENTRADA
    * SAÍDA: S/SAÍDA
    */
    public function insereJogador(){
        $this->insereJogador1();
        $this->insereJogador2();
    }
    
    
    /*
    * DESCR: O método insereJogador1() tem a função de inserir o primeiro
    * jogador passado por parâmetro no tabuleiro nas primeira posições,
    * chamando a função existeObstaculo
    * para impedir de ele ser inserido em cima do obstaculo
    * AUTOR: Rebeca Lima Gomes
    * HORAS: 2
    * ENTRADA: S/ENTRADA
    * SAÍDA: S/SAÍDA
    */
    public function insereJogador1(){
        /*Inserção do Jogador 01 no Tabuleiro*/
        $x=0;
        $y=0;

        while($x < $this->limiteX){
            while($y <= $this->limiteY){
                if(!$this->arrayCelulas[$x][$y]->existeObstaculo()){
                    $posicaoInicial["x"] = $x;
                    $posicaoInicial["y"] = $y;
                    $this->jogador1->movimentar($posicaoInicial, $this->obstaculoX, $this->obstaculoY);
                    $flag = true;
                    break;
                }
               $y++; 
            }
            if($flag){
                break;
            }
            $x++;
            $y = 0;
        }
    }
    
    /*
    * DESCR: O método insereJogador2() tem a função de inserir o segundo
    * jogador passado por parâmetro no tabuleiro nas ultimas posições,
    * chamando a função existeObstaculo
    * para impedir de ele ser inserido em cima do obstaculo
    * AUTOR: Rebeca Lima Gomes
    * HORAS: 2
    * ENTRADA: S/ENTRADA
    * SAÍDA: S/SAÍDA
    */
    public function insereJogador2(){
        /*Inserção do Jogador 02 no Tabuleiro*/
        $x=3;
        $y=4;

        while($x > 0){
            
            while($y > 0){
                //var_dump($this->arrayCelulas[3][2]);
                if(!$this->arrayCelulas[$x][$y]->existeObstaculo()){
                    //var_dump($y);
                    $posicaoInicial["x"] = $x;
                    $posicaoInicial["y"] = $y;
                    $this->jogador2->movimentar($posicaoInicial, $this->obstaculoX, $this->obstaculoY);
                    $flag = true;
                    break;
                }
               $y--; 
            }
            if($flag){
                break;
            }
            $x--;
            $y = 5;
        }
    }
    
        /*
    * DESCR: O método getArrayCelulas() retorna o array de instâncias das celulas
    * com suas respectivas posições
    * AUTOR: Rebeca Lima Gomes
    * HORAS: 1
    * ENTRADA: S/ENTRADA
    * SAÍDA: Array de celulas
    */
    public function getArrayCelulas(){
        return $this->arrayCelulas;
    }
    
    /*
    * DESCR: O método getObstaculoX() retorna o array de instâncias das celulas
    * com suas respectivas posições na reta X
    * AUTOR: Rebeca Lima Gomes
    * HORAS: 1
    * ENTRADA: S/ENTRADA
    * SAÍDA: Array de obstaculo na posição X
    */
    public function getObstaculoX(){
        return $this->obstaculoX;
    }
    
    /*
    * DESCR: O método getObstaculoY() retorna o array de instâncias das celulas
    * com suas respectivas posições na reta Y
    * AUTOR: Rebeca Lima Gomes
    * HORAS: 1
    * ENTRADA: S/ENTRADA
    * SAÍDA: Array de obstaculo na posição Y
    */
    public function getObstaculoY(){
        return $this->obstaculoY;
    }
    
    /*
    * DESCR: O método getLimiteX() retorna o limite de criação de celula
    * na reta X passado para o parametro
    * AUTOR: Rebeca Lima Gomes
    * HORAS: 1
    * ENTRADA: S/ENTRADA
    * SAÍDA: Quantidade de celula na reta X
    */
    public function getLimiteX(){
        return $this->limiteX;
    }
    
    /*
    * DESCR: O método getLimiteY() retorna o limite de criação de celula
    * na reta X passado para o parametro
    * AUTOR: Rebeca Lima Gomes
    * HORAS: 1
    * ENTRADA: S/ENTRADA
    * SAÍDA: Quantidade de celula na reta Y
    */
    public function getLimiteY(){
        return $this->limiteY;
    }
    
    
}

?>  