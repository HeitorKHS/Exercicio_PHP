<?php

    echo "Exercício 8) Faça um programa em PHP, que dado um peso e uma altura de uma pessoa adulta, 
    calcule o Índice de Massa Corporal (IMC) e informe a condição da pessoa. IMC= peso/altura^2<br><br>";

    $peso = 80;
    $altura = 1.64;
    $imc = $peso / $altura ** 2;

    switch ($imc)
    {
        
        case $imc < 18.5: echo "Abaixo do peso"; break;
        case $imc >= 18.5 && $imc <= 25: echo "Peso normal"; break;
        case $imc >= 25.1 && $imc <= 30: echo "Acima do peso"; break;
        case $imc > 30: echo "Obeso"; break;
    }
?>