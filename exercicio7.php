<?php

abstract class ContaBancaria {
    protected string $titular;
    protected float $saldo;

    public function __construct(string $titular, float $saldo) {
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function getSaldo(): float {
        return $this->saldo;
    }

    public function depositar(float $valor): void {
        if ($valor > 0) {
            $this->saldo += $valor;
        }
    }

    abstract public function calcularTarifa(): float;   
}

class ContaCorrente extends ContaBancaria {
    public function calcularTarifa(): float {
        return 15.00;
    }
}

class ContaPoupanca extends ContaBancaria {
    public function calcularTarifa(): float {
        return 0.00;
    }
}

$cc = new ContaCorrente("João", 500.00);
$cp = new ContaPoupanca("Maria", 500.00);

$cc->depositar(200.00);
$cp->depositar(200.00);

$tarifaCC = $cc->calcularTarifa();
$saldoRestanteCC = $cc->getSaldo() - $tarifaCC;

echo "Conta Corrente: saldo após depósito de R$ " . number_format($cc->getSaldo(), 2, ',', '.') . 
     "; tarifa de R$ " . number_format($tarifaCC, 2, ',', '.') . 
     "; saldo após desconto de R$ " . number_format($saldoRestanteCC, 2, ',', '.') . ".\n";

$tarifaCP = $cp->calcularTarifa();
$saldoRestanteCP = $cp->getSaldo() - $tarifaCP;

echo "Conta Poupança: saldo após depósito de R$ " . number_format($cp->getSaldo(), 2, ',', '.') . 
     "; tarifa de R$ " . number_format($tarifaCP, 2, ',', '.') . 
     "; saldo após desconto de R$ " . number_format($saldoRestanteCP, 2, ',', '.') . ".\n";
