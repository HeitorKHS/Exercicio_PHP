<?php

    echo "Exercício 16) Faça uma função em PHP que, dado a nota da prova 1 (NP1) a nota da prova 2 (NP2) a 
    nota do trabalho 1 (NT1) e a nota do trabalho 2 (NT2). Calcule a média final (MF), 
    caso o aluno foi Aprovado retorne 1, caso o aluno foi Reprovado retorne 0,<br><br>";

    function media_final($p1, $p2, $t1, $t2)
    {
        $mp = ($p1+$p2)/2;
        $mt = ($t1+$t2)/2;
        $mf = 0.8*$mp + 0.2*$mt;
        if($mf>=5) return 1;
        return 0;
    }

    echo media_final(4,5,5,5);

?>