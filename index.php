<?php

class Pessoa
{

    public $nome;
    public $idade;

    public function falar()
    {
        echo $this->nome . " de " . $this->idade . " acabaou de falar";
    }
}

$jackson = new Pessoa();
$jackson->nome = "Jackson Almeida";
$jackson->idade = 23;
$jackson->falar();
