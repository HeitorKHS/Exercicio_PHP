<?php

    echo "Exercício 14) Faça uma função em PHP que, dado o Saláriode um funcionário e um Percentualde Reajuste salarial. 
    Calcule e retorne o novo Salário do funcionário com base no Percentual de Reajuste. 
    Reajuste = (Salario*Percentual)/100
    Salario = Salario + Reajuste <br><br>";

    function salario_reajuste($salario, $reajuste)
    {
        return $salario + $salario*$reajuste;
    }

    echo "Salario novo: R$".salario_reajuste(1000,0.30);

?>