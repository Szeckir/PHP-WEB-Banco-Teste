<?php
function addConta(array $conta) {
    $contasCorrentes = [$conta];
}

function sacarDinheiro(array &$conta, float $valorSacar) {
    if ($valorSacar > $conta['saldo']) {
        echo "Você não possui saldo suficiente" . PHP_EOL;
    } else {
        $conta['saldo'] -= $valorSacar;
    }
}

function depoistarDinheiro(array &$conta, float $valorDepositar) {
    if($valorDepositar < 0) {
        echo "Não é possível depositar valores negativos";
    } else {
        $conta['saldo'] += $valorDepositar;
    }
}

function exibirConta(array $conta) {
    echo "DADOS: [Nome: " . $conta['nome'] . ", Saldo: " . $conta['saldo'] . "]";
}

