<?php

function separador() : void
{
    echo str_repeat("=", 10);
    echo PHP_EOL;
}

function cls()                                                                                                             
{
    print("\033[2J\033[;H");
}

$nome1 = "Douglas";
$idade1 = 31;
$valor1 = 10.5;
$ehMaiorQue10 = true;

cls();

separador();
echo $nome1 . PHP_EOL;
echo $idade1 . PHP_EOL;
echo $valor1 . PHP_EOL;
echo $ehMaiorQue10 . PHP_EOL;
separador();

