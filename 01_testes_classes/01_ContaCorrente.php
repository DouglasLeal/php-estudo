<?php
require_once "00_Conta.php";

class ContaCorrente extends Conta
{
    public function sacar(float $valor): bool
    {   
        $taxa = 0.5;
        $valorTotal = $valor + $taxa;
        if ($valor <= $taxa) {
            echo "Valor digitado incorretamente." . PHP_EOL;
            return false;
        }

        if ($valorTotal > $this->saldo) {
            echo "Saldo insuficiente." . PHP_EOL;
            return false;
        }

        $this->saldo -= $valorTotal;
        return true;
    }
}