<?php 
// VARIAVEIS 
$nome = $_POST['nome'];
$cliente = $_POST['cliente'];
$serasaScore = $_POST['serasaScore'];
$valorEmprestimo = $_POST['valor'];
$parcela = $_POST['parcela'];
//CARREGA TAXA IOF 
$iof = 0.0038;

if (isset($_POST['seguroDesemprego'])){
   $seguroDesemprego = 49.90;
} else {
    $seguroDesemprego = 0;
}


if($cliente=="sim") {
    $juros = 0.03;
    $tarifa = 0;
} 
    else {
        $tarifa = 35;
        if($serasaScore >= 700) {
         $juros = 0.05;
        } 
    elseif ($serasaScore >= 500) {
        $juros = 0.10;
    } 
    elseif ($serasaScore >=300) {
        $juros = 0.15;
    } 
    else {
        $juros = 0.20;
    }

}

$totalEmprestimo = $valorEmprestimo + ($valorEmprestimo * $juros); 
$valParcela = $totalEmprestimo / $parcela;
$custoTotal = $totalEmprestimo + ($totalEmprestimo * $iof) + $seguroDesemprego + $tarifa;


echo "<p>" . $nome . ", seja bem vindo ao mybank";
echo "<p> Valor das parcelas: R$ " . $valParcela;
echo "<p> Quantidade de parcelas: " . $parcela; 
echo "<p> Taxa de juros " . $juros * 100 . "%";
echo "<p Custo efetivo total R$" . $custoTotal . "</p>";

 

?>