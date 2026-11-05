<?php

class Animal{
    public function emitirSom(){
        echo "Som desconhecido...";
    }
}

class Gato extends Animal{
    public function emitirSom(){
        echo "Miauuuuuu!";
    }
}

class Cachorro extends Animal{
    public function emitirSom(){
        echo "Au au!";
    }
}

$gato = new Gato();
$gato->emitirSom(); // Saída: Miauuuuuu!
echo "<br>";

$cachorro = new Cachorro();
$cachorro->emitirSom(); // Saída: Au au!