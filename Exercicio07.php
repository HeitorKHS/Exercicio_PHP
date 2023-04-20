<?php

    echo "Exercício 7) Faça um programa emPHP, que dado um código de um produto mostre sua respectiva 
    classificação.<br><br>";

    $codigo = 5;

    switch ($codigo)
    {
        
        case 1: echo "Alimento não-perecível"; break;
        case 2:
        case 3: echo"Alimento perecível"; break;
        case 4:
        case 5: 
        case 6: echo"Vestuário"; break;
        case 8:
        case 7:
        case 9: echo"Limpeza"; break;
        case 10: echo"Utensílios domésticos"; break;
        case 11:
        case 12: echo"Eletrônicos"; break;
        default: echo "Código inválido";

    }

?>