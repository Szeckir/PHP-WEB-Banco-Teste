<?php
require_once "../php/acoes.php";

$nome = "Thomaz Gomes Szeckir";
$cpf = 86735934091;

$nome2 = "Eduardo Szeckir";
$cpf2 = 50966677072;


$contasBanco = [
    $cpf => [
        'nome' => $nome,
        'saldo' => 0
    ],

    $cpf2 => [
        'nome' => $nome2,
        'saldo' => 0
    ]
];

depoistarDinheiro($contasBanco[$cpf], 1200);
?>

<!doctype html>
<html lang = "en">
<head>
    <meta charset="utf-8">
</head>

<body>
<main>
    <h1>Seu Banco: </h1>
    <h4>Dados de sua conta: </h4> <br>

    <p><b>Nome: </b><?= $contasBanco[$cpf]['nome'] ?> </p>
    <p><b>Saldo Conta: </b> <?= $contasBanco[$cpf]['saldo'] ?></p>
    <br>
    <a href="index.php">Voltar</a>

</main>

</body>

<footer>
    &copy; Feito por Thomaz Szeckir, 2023
</footer>

</html>

