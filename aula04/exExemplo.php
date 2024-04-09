<?php
$dados = array(1, 2, 4, 8, 16, 32 );

echo "<p> Array original</p>";
for($i=0;$i<=5;$i++){
    echo "$dados[$i]<br>";
}

echo "<p>Array alternado</p>";
for ($i=0; $i<=5 ; $i++) { 
    $dados[$i] = $dados[$i] * 3;
    echo "$dados[$i] <br>";
}




?>