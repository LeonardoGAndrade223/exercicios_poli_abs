<?php

abstract class Veiculo{
    abstract public function mover();
}
    public function acelerar(){
        echo 'O carro está acelerando';
    }
class Carro extends Veiculo{
    public function mover(){
        echo 'O carro está movendo';
    }
}

$carro = new Carro();
$carro->mover();
echo '<br>';
$carro->acelerar();