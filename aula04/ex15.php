<?php
$letra = array("A","B","C","D","E");

$letradig = $_POST["letra"];

for ($i=0; $i <=4 ; $i++) { 
    if ($letra[$i]==$letradig) {
        $letra[$i] = "X";
        
    }

}

for ($i=0; $i <=4 ; $i++) { 
    echo"$letra[$i] <br>";
    
}


?>