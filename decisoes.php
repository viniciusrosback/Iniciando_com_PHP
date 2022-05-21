<?php

$idade = 15;
$numedoDePessoas = 1;

echo "Voce so pode entrar se tiver a partir de 18 anos." . PHP_EOL;

if ($idade >= 18){
	echo "Voce tem $idade anos. Pode entrar.";
	} else if( $idade < 18 && $numedoDePessoas != 1){
		echo "Voce tem $idade anos. Mas esta acompanhado.";
	} else{
		echo "Voce tem $idade anos e nao esta acompanhado, nao pode entrar." .PHP_EOL;
		echo "Voce precisa se retirar.";
	}

echo PHP_EOL;
echo "Boa Festa!";
