<?php

class Carro{
    public function acelerar(){
        echo "O carro está acelerando...";
    }
}

class CarroCombustao extends Carro{
    public function acelerar(){
        echo "O carro de verdade está acelerando";
    }
}

class CarroEletrico extends Carro{
    public function acelerar(){
        echo "O carro de macio não funciona";
    }
}

$carro = new Carro();
$carro->acelerar();

$carroCombustao = new carroCombustao();
$carroCombustao->acelerar();
echo '<br>';
$carroEletrico = new carroEletrico();
$carroEletrico->acelerar();