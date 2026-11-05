<?php

class Frete{
    public function calcularFrete($peso){
        return 0;
    } 
}

class FreteNormal extends Frete{
    public function calcularFrete($peso){
    return ($peso*2) + 10;
    }
}

class FreteExpresso extends Frete{
    public function calcularFrete($peso){
        return ($peso*5) + 20;
    }
}

class Retirada extends Frete{
    public function calcularFrete($peso){
        return 0;
    }
}

// Objetos

$normal = new FreteNormal();
$expresso = new FreteExpresso();
$retirada = new Retirada();

$peso = 3;

function exibirFrete(Frete $frete, $peso){
echo "Valor: "
    . number_format($frete->calcularFrete($peso), 2, ',', '.')
    . "<br>";
}

echo "Frete normal - ";
exibirFrete($normal, $peso);

echo "Frete expresso - ";
exibirFrete($expresso, $peso);

echo "Retirada - ";
exibirFrete($retirada, $peso);