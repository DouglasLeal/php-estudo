<?php
require_once "01_ContaCorrente.php";
require_once "02_ContaPoupanca.php";

function separador() : void
{
    echo PHP_EOL;
    echo str_repeat("=", 10);
    echo PHP_EOL;
}

function cls()                                                                                                             
{
    print("\033[2J\033[;H");
}

cls();

$cc = new ContaCorrente("Douglas", 1001, 100);
$cp = new ContaPoupanca("Ana", 1002, 100);

$cc->transferir(50, $cp);

echo $cc->__toString();
echo $cp->__toString();