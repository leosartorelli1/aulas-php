<?php 
$partidaOne = $_POST['primeiraPartida'];
$partidaTwo = $_POST['segundaPartida'];

$mult = $partidaOne * $partidaTwo;

echo "<h3>Exercício 07 </h3>";

if($mult >= 50) {
    echo "<p> Parabéns, a equipe possui $mult pontos! </p>";
}

else {
    echo "<p> Precisamos intensificar nossos treinos! </p>";
}

?>