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

$pessoas = ["Douglas", "Ana", "Pedro", "Bruna"];
$pessoas2 = [["nome" => "Douglas", "idade" => 30], ["nome" => "Ana", "idade" => 20],];

cls();

foreach($pessoas as $pessoa){
    echo ("$pessoa | ");
}
separador();

for ($i=0; $i < count($pessoas); $i++) { 
    echo ("$pessoas[$i] | ");
}
separador();

foreach($pessoas2 as $pessoa){
    echo "{$pessoa['nome']}:{$pessoa['idade']} | ";
}
separador();

for ($i=0; $i < count($pessoas2); $i++) { 
    echo ("{$pessoas2[$i]['nome']} | ");
}
separador();
