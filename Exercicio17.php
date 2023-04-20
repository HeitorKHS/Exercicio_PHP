<?php

    echo "Exercício 17) Faça uma função em PHP que dado um número real ae um número inteiro b, 
    calcule e retorne o valor de a elevado  a b, a^b.  
    Obs:  Não  utilize  a  função  pow(),  faça  você  mesmo  utilizando  um  laço  de repetição.<br><br>";


    function elevado($a, $b)
    {
        $soma = $a;
        while($b>0)
        {
            $soma = $soma * $a;
            $b--;
        }
        return $soma;
    }

    echo elevado(2,10);

?>