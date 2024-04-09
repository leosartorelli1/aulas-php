<?php
    $idade = $_POST['txtnum'];
    echo "<h3> exercício 04</h3>";
        if ($idade >= 10) {
            echo "<p> Parabêns! Você esta apto para participar da excursão!</p>";
    }
    
    else {
        echo "<p>Aluno não apto</p>";
    }

?>