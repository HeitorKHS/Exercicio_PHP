<?php

    echo "Exercício 13)Faça  uma  função  em PHP que,  receba  as  coordenadas  de  dois  pontos  (x1,  y1) 
     e  (x2,  y2).  Calcule  e retorne a distância entre os dois pontos. 
     Todos os valores utilizados na função são do tiponúmeroreal.Distancia=√(x2-x1)2+(y2-y1)^2 <br><br>";

    function distancia($x1, $y1, $x2, $y2)
    {
        return sqrt(($x2-$x1)**2+($y2-$y1)**2);
    }

    echo "Distância de ".distancia(25,32,10,35);

?>