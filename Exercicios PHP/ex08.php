<?php 
$temperatura = $_POST['txtnum'];
echo"<h3> Exercicio 08 </h3>";

if($temperatura == 0) {
    echo"<p> Temperatura Neutra </p>";
}

elseif($temperatura < 0) {
    echo"<p> Frio intenso detectado </p>";
} 

else {
    echo"<p> Clima ameno e agradável </p>";
} 
?>