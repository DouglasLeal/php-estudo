<?php

class Pessoa
{
    private float $imc;

    public function __construct(private $nome, private $peso, private $altura, private $id = null){
        if($altura > 3){
            $this->altura  = $altura/100;
        }
        $this->imc = $this->calcularIMC();
    }

    private function calcularIMC() : float{
        return round($this->peso / ($this->altura * $this->altura), 2);
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

    public function getId(): int{
        return $this->id;
    }
}