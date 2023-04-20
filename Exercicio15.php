<?php

    echo "Exercício 15) Faça uma função em PHP que, dado dois números a e b, retorne 1 se a > b, 
    retorne -1 se b > a, retorne 0 se a == b. <br><br>";

    function maior_igual($a, $b)
    {
        if($a>$b) return 1;
        else if($b>$a) return -1;
        return 0;
    }

    echo maior_igual(2,1);

?>