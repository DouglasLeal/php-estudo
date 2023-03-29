<?php

class Pessoa
{
    private float $imc;

    public function __construct(private $nome, private $peso, private $altura){
        $this->calcularIMC();
    }

    private function calcularIMC() : void{
        $this->imc = $this->peso / ($this->altura * $this->altura);
    }

    public function getNome(): string{
        return $this->nome;
    }

    public function getPeso(): float{
        return $this->peso;
    }

    public function getAltura(): float{
        return $this->altura;
    }

    public function getIMC(): float{
        return $this->imc;
    }
}