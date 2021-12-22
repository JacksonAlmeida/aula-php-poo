<?php

class Veiculo
{
    private $marca, $modelo, $cor;

    public function __construct($marca, $modelo, $cor)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->cor = $cor;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->marca = $modelo;
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function setCor($cor)
    {
        $this->cor = $cor;
    }

    public function Andar()
    {
        echo "Andou";
    }

    public function Parar()
    {
        echo "Parou";
    }
}

class Carro extends Veiculo
{
}

class Moto extends Veiculo
{
    public function __construct()
    {
    }
}

$carro = new Carro("Gol", "Golf", "Preto");
$carro->Andar();
echo "<pre>";
var_dump($carro);
echo "</pre>";
echo "<br> <hr>";


$moto = new Moto();
echo "<pre>";
$moto->setMarca("Honda");
$moto->setModelo("TITAN150");
$moto->setCor("Vermelho");
var_dump($moto);
echo "</pre>";
echo "<br>";
