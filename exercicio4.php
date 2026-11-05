<?php

abstract class Eletrodomestico{
    protected string $marca;

    public function __construct($marca){
        $this->marca = $marca;
    }
     public function getMarca(){
        echo $this->marca;
    }
    abstract public function ligar();
}

class Televisao extends Eletrodomestico{

    public function ligar(){
        echo "Ligando a tela... <br>";
    }
}

class Geladeira extends Eletrodomestico{

    public function ligar(){
        echo "Iniciando sistema de refrigeração...";
    }
}

$televisao = new Televisao('Samsung');
$televisao->getMarca();
echo '<br>';
$televisao->ligar();

$geladeira = new Geladeira('Samsung');
$geladeira->getMarca();
echo '<br>';
$geladeira->ligar();