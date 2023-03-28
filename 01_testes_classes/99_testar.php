<?php
require_once "00_Conta.php";

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

$c1 = new Conta("Douglas", 1001, 100);
$c2 = new Conta("Ana", 1002, 100);

print($c1);
print($c2);
separador();

$c1->transferir(50, $c2);
print($c1);
print($c2);