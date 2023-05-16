<?php

$peso = 87;
$altura = 1.87;

$imc = $peso / ($altura * $altura);
$imc = round($imc, 2);

echo "Seu IMC é $imc";

if ($imc < 18.5){
    echo " e você está com Baixo Peso!". PHP_EOL;
}else if ($imc >= 18.5 and $imc <= 24.9){
    echo " e você está com Peso Normal!". PHP_EOL;
}else if ($imc >= 25 and $imc <= 29.9){
    echo " e você está com Sobrepeso!". PHP_EOL;
}else if ($imc >= 30 and $imc <= 34.9){
    echo " e você com Obesidade grau 1!". PHP_EOL;
}else if ($imc >= 35 and $imc <= 39.9){
    echo " e você está com Obesidade grau 2!". PHP_EOL;
}else{
    echo " e você está com Obesidade grau 3!". PHP_EOL;
}