<?php

    echo "Exercício 3) Construa um programa em PHP, que considerando um triângulo retângulo, leia os catetos 
    (cat1 e cat2) do triângulo, calcule e mostre para o usuário o valor da hipotenusa (hip), 
    sabendo que: hip=cat^2+cat^2<br><br>";

    $cat1 = 10;
    $cat2 = 15;
    $hip = $cat1**2 + $cat2**2;

    echo "hip = {$hip}";

?>