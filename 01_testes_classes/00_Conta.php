<?php
abstract class Conta
{
   private string $titular;
   private int $conta;
   protected float $saldo;

   public function __construct(string $titular, int $conta, float $saldo)
   {
      $this->titular = $titular;
      $this->conta = $conta;
      $this->saldo = $saldo;
   }

   public function sacar(float $valor) : bool
   {
      if($valor <= 0){
         echo "Valor digitado incorretamente." . PHP_EOL;
         return false;
      }

      if($valor > $this->saldo){
         echo "Saldo insuficiente." . PHP_EOL;
         return false;
      }

      $this->saldo -= $valor;
      return true;
   }

   public function depositar(float $valor) : bool
   {
      if($valor <= 0){
         echo "Valor digitado incorretamente." . PHP_EOL;
         return false;
      }

      $this->saldo += $valor;
      return true;
   }

   public function transferir(float $valor, $contaDestino): bool
   {
      if($this->sacar($valor)){
         $contaDestino->depositar($valor);
         return true;
      }

      echo("Não foi possível realizar a transferência." . PHP_EOL);
      return false;
   }

   public function __toString() : string
   {
      return "Titular: {$this->titular} | Saldo: {$this->saldo} | Conta: {$this->conta}" . PHP_EOL;
   }

}

