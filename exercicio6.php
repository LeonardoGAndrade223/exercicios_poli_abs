
<?php

abstract class Funcionario {
    protected string $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    abstract public function calcularSalario();
}

class FuncionarioFixo extends Funcionario {
    private float $salarioMensal;

    public function __construct($nome, $salarioMensal) {
        parent::__construct($nome);
        $this->salarioMensal = $salarioMensal;
    }

    public function calcularSalario() {
        return $this->salarioMensal;
    }
}

class FuncionarioComissionado extends Funcionario {
    private float $salarioBase;
    private float $valorVendas;

    public function __construct($nome, $salarioBase, $valorVendas) {
        parent::__construct($nome);
        $this->salarioBase = $salarioBase;
        $this->valorVendas = $valorVendas;
    }

    public function calcularSalario() {
        return $this->salarioBase + ($this->valorVendas * 0.10);
    }
}

$funcFixo = new FuncionarioFixo("João", 2500);

$funcComissionado = new FuncionarioComissionado(
    "Maria",
    2000,
    5000
);

echo $funcFixo->getNome() . " - Salário: R$ "
    . number_format($funcFixo->calcularSalario(), 2, ',', '.');

echo "<br>";

echo $funcComissionado->getNome() . " - Salário: R$ "
    . number_format($funcComissionado->calcularSalario(), 2, ',', '.');

?>
