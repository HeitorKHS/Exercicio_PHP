<?php

    echo "Exercício 12) Faça  uma  função  em PHP que  dado  uma  temperatura  em  graus  Fahrenheit,  
    calcule  e  retorne  a temperatura em graus Celsius. Celsius=(Fahrenheit-32.0)*(5.0/9.0)<br><br>";


    function fahrenheit_for_celsius($fahrenheit)
    {
        return ($fahrenheit-32.0)*(5.0/9.0);
    }

    echo fahrenheit_for_celsius(50)." Celsius";
?>