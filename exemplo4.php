<?php

abstract class Carro{
    abstract public function acelerar();
}


class CarroCombustao extends Carro{
    public function acelerar(){
        echo 'O carro de verdade está acelerando';
    }
}

class CarroEletrico extends Carro{
    public function acelerar(){
        echo 'O carro de macio não funciona';
    }
}



$carroCombustao = new CarroCombustao();
$carroCombustao->acelerar();
echo '<br>';
$carroEletrico = new CarroEletrico();
$carroEletrico->acelerar();