<?php
//Tipos escalares

$nome = "Olá, Mundo!";
var_dump($nome);

if(is_string($nome)):
    echo "É uma string ";
else:
    echo "Não é uma string";
endif;
echo "<hr>";

//Int

$idade = 18;
var_dump($idade);

if(is_int($idade)):
    echo "É um número inteiro.";
else:
    echo "Não é um número inteiro.";
endif;
echo "<hr>";

//float

$altura = 1.75;
var_dump($altura);
if(is_float($altura)):
    echo "Is Float";
else:
    echo "Not is float";
endif;
echo "<hr>";

//boolean

$admin = true;
var_dump($admin);

if(is_bool($admin)):
    echo "True";
else:
    echo "False";
endif;
echo "<hr>";

 
//tipos compostos

//arrey

$car = array ("Gol", "Uno", "Hillux", 12, 12.4, true);
var_dump($car);
if(is_array($car)):
    echo "is a array";
else:
    echo "Not is a array";
endif;
    echo "<hr>";

