<?php
    $num = $_GET['txtnum'];

    echo "<h3> Calcula porcentagem </h3>";

    $porcentagem = ($num * 0.15);

    echo "15% de $num é : $porcentagem";
    echo "Valor com desconto: R$ " . $num - $porcentagem;
?>