<?php

abstract class Veiculo{
    private string $modelo;

    public function __construct($modelo){
        $this->modelo = $modelo;
    }
    public function getModelo(){
        echo $this->modelo;
    }

    abstract public function mover();

}

class Carro extends Veiculo{
    protected string $cor;

    public function __construct($modelo, $cor){
        parent::__construct($modelo);
        $this->cor = $cor;
    }
    public function mover(){
        echo "O carro está movendo";
    }
    public function getCor(){
        echo $this->cor;
    }
}

$carro = new Carro('Astra', 'Preto');
$carro->getModelo();
echo '<br>';
$carro->mover();