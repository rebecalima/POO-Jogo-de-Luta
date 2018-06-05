<?php
defined('BASEPATH') OR exit('No direct script access allowed');
abstract class Jogador{
    private $vida, $nome;
    private $posicaoAtual = array();
    private $inventario = array();
    
    public abstract function combater();
}
?>