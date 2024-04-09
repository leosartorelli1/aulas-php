<?php
    $num = $_POST["txtnum"];

    echo "<h3>Sequencia Aritmética  </h3>";

    
    $contador = 1;
   while($contador >= $num)
   {
    echo"$contador <br>";
    $contador+=2;
   }

?>
