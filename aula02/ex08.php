<?php
    $tempum = $_POST["txtnum"];
    
    echo "<h3>Sequencia Numérica  </h3>";

    
    if($tempum==0){
        echo"Temperatura neutra!";

    }
    elseif($tempum<0){
        echo"Frio intenso detectado! ";
    }

    else{
        echo"clima ameno e agradável";
    }
   

?>