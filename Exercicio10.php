<?php

    echo "Exercício 10) Construa um algoritmo em PHP, que dado um número inteiro positivo,
     calcule e exiba o fatorial desse número.Utilize laço de repetição!<br><br>";

    $num = 5;
    $fatorial = 1;

    while($num >= 1)
    {
        $fatorial = $fatorial * $num;
        $num--;
    }
    
    echo "Fatorial é {$fatorial}";

?>