<?php
    $pontoum = $_POST["txtnum"];
    $pontodoi = $_POST["txtdoi"];
    echo "<h3>Sequencia Numérica  </h3>";

    $multi = $pontodoi * $pontoum;
    if($multi>= 50){
        echo"A equipe teve $multi pontos parabéns!";

    }
    else{
        echo"Sinto muito mas a equipe precisa treinar mais!";
    }
   

?>