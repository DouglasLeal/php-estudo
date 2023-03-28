<?php

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
$altura = readline("Digite sua altura (cm): ");
$peso = readline("Digite seu peso: ");

if($altura > 3){
    $altura /= 100;
}

$imc = $peso / ($altura**2);

echo "Seu IMC é: " . round($imc, 2);