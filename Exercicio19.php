<?php

    echo "Exercício 19) Dizemos que um número com pelo menos dois algarismos é palíndromo se: 
    O 1° algarismo de n é igual ao seu último algarismo
    O 2° algarismo de n é igual ao penúltimo algarismo
    E assim sucessivamente...
    Ou seja, um número palíndromo é o mesmo número lido da esquerda para direita e da direita para a esquerda, o número é igual ao seu 
    reverso. Exemplos: 567765 e 32423 são palíndromos, enquanto 567675 não é palíndromo. 
    Faça uma função em PHP que dado um número inteiro, verifique se esse número é palíndromo. 
    Se o número é palíndromo retorne 1, se o número não é palíndromo retorne 0.<br><br>";


    function palindromo($num)
    {
        $reverse = strrev($num);
        if($reverse == $num) return 1;
        return 0;
    }

    echo palindromo(10);

?>