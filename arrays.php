
<?php

$car = array (1=>"Hilux", 2=>"Jeep",3=> "Corvete");
    //print_r ($car);

    echo $car [1];


echo "<br>";
echo "<hr>";



$moto = ["Street Twin", "Himalayan", "Harley Davidson"];

echo $moto [2];

// 2 Formas de fazer 1 Array
echo "<hr>";


$moto = ["Street Twin", "Himalayan", "Harley Davidson"];

//Adicionando item no array
$moto[10] = "Ducati";
$moto[] = "XRE";

echo "<br>";
echo $moto [10];

echo "<br>";
echo "<hr>";

//Count

echo count ($moto);  //Mostra quantos intens tem no array
echo "<hr>";

/*
$totalMotos = count ($car);
echo $totalMotos;
*/

//Foreach

foreach ($car as $value){
    echo $value. "<br>";
  
}

//Arrays associativos

