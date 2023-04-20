<?php

    echo "Exercício 9) Construa um algoritmo em PHP, que mostre todos os números pares de 1 a 1000.<br><br>";

    $num = 1;

    while($num<=1000)
    {
        if($num%2 == 0) echo "{$num}<br>";
        $num++;
    }
    
?>