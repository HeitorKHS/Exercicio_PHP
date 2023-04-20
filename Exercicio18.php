<?php

    echo "Exercício 18) Faça uma função em PHP que dado um número inteiro, verifique se esse número é primo ou não. 
    Se o número é primo retorne 1, se o número não é primo retorne 0. 
    Obs: Um número é chamado de primo se ele é divisível apenas por 1 e por ele mesmo.<br><br>";


    function primo($num)
    {
        $primo = 1;
        $i = 2;
        while($i<$num)
        {
          if($num%$i == 0) $primo = 0;
          $i++;
        }
        return $primo;
    }

    echo primo(11);

?>