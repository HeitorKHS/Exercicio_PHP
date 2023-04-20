<?php

    echo "Exercício 2) Faça um programa em PHP, que dado um valor em Dólar (US$) e a cotação do Dólar atual. 
    Converta o valor dado em Dólar para Real (R$) e mostre o resultado em Real (R$) para o usuário.<br><br>";

    $dolar = 250;
    $cotacao = 5.25;
    $real = $dolar*$cotacao;

    echo "Valor de {$dolar} dolares em reais é: {$real}";

?>