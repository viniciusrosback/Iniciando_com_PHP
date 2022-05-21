<?php

$peso = 70;
$altura = 1.93;
$imc = $peso / $altura ** 2;

echo "Seu IMC e de $imc. Voce esta com o IMC ";

if($imc < 18.5){
	echo "abaixo";
} else if($imc < 25){
	echo "dentro";
} else{
	echo "acima";
}

echo " do recomendado";