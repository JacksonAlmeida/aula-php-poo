<?php 

class Pessoa{
    
    public $nome;
    public $idade;

    public function falar(){
        echo "falou";
    }
}

$jackson = new Pessoa();
$jackson->falar();