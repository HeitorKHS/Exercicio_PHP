<?php

    echo"Exercício 1)<br><br>";

    echo"A) Considere o texto 'Ads é mais legal'. Modifique o texto para que ele seja apresentado somente com letras maiúsculas.<br>";
    $frase = "Ads é mais legal";
    $maiuscula = mb_strtoupper($frase);
    echo "{$maiuscula}<br><br>";

    echo"B) Considere o texto 'Gosto de cachorros mas não gosto tanto de gatos', verifique se existe o texto 'não gosto'.<br>";
    $frase = "Gosto de cachorros mas não gosto tanto de gatos";
    $verif = strpos($frase,"não gosto");
    if($verif!=null) echo "Encontrou o texto na posição: {$verif}<br><br>";
    else echo "Não encontrou";

    echo"C) Considere o texto 'Algoritimo é um conjunto de instruções lógicas para resolver um problema'. 
    Modifique o texto para que ele seja apresentado somente com letras minúsculas<br>";
    $frase = "Algoritimo é um conjunto de instruções lógicas para resolver um problema";
    $verif = mb_strtolower($frase);
    echo "{$frase}<br><br>";
    
    echo"D) Considere o texto 'Os heróis da DC são melhores que os heróis da Marvel'. 
    Modifique o texto para que o texto 'são melhores' seja substituído por 'não são melhores'<br>";
    $frase = "Os heróis da DC são melhores que os heróis da Marvel";
    $verif = str_replace("são melhores","não são melhores",$frase);
    echo "{$frase}<br><br>";

?>