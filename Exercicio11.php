<?php

    echo "Exercício 11) Um matemático italiano da idade média conseguiu modelar o ritmo de crescimento da 
    população de coelhos através de uma sequência de números naturais que passou a ser conhecida como 
    Sequência de Fibonacci. 
    Seja Fno n-ésimo termo da sequência. O primeiro número da sequência F1= 1, o segundo F2= 1. 
    Enquanto o n-ésimo termo da sequência Fn é dado pela soma dos dois anteriores, 
    ou seja, Fn=Fn-1+Fn-2, ∀n > 2<br><br>";


    $n = 10;
    $fib1 = 1;
    $fib2 = 1;
    $soma;
    while($n>2)
    {
        $soma = $fib1+$fib2;
        $fib1=$fib2;
        $fib2=$soma;
        $n--;
    } 
    echo "Fibonacci é {$fib2}";

?>