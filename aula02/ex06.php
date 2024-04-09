<?php
    $idade = $_POST['txtnum'];

    echo "<h3> exercício 06</h3>";
        if ($idade >= 60 ) {
            echo "<p>Receba a pulseira VIP para Idosos!!</p>";
    }

            elseif($idade >= 18) {
                echo"<p>Receva a pulseira NORMAL!!</p>";
        }
    
    else {
        echo "<p>Receba a pulseira para MENORES!</p>";
    }
    echo"<p>Programa encerrado</p>";
?>