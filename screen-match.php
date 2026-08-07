<?php

function exibirMensagemAnoDeLancamento(int $ano): void {
    if ($ano > 2022) {
        echo "Esse filme é um lançamento\n";
    } elseif ($ano > 2020 && $ano <= 2022) {
        echo "Esse filme ainda é novo\n";
    } else {
        echo "Esse filme não é um lançamento\n";
    }
}

function inclusoNoPlano(bool $planoPrime, int $anoLancamento) {
    return $planoPrime || $anoLancamento < 2020;
}


echo "Bem-vindo(a) ao screen match! \n";

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = 2022;
$notaFilme = 8.8;
$inclusoNoPlano = true;
$quantidadeDeNotas = $argc - 1;
$notas = [];
$somaDeNotas = 0.0;

for ($contador = 1; $contador < $argc; $contador++) {
    $somaDeNotas += $argv[$contador];
}

$notaFilme =  $somaDeNotas / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = inclusoNoPlano($planoPrime, $anoLancamento);

echo "Nome do filme: " . $nomeFilme . "\n";
echo "Nota do filme: " . $notaFilme . "\n";
echo "Ano de Lançamento: " . $anoLancamento . "\n";

exibirMensagemAnoDeLancamento($anoLancamento);

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "ação\n",
    "Thor: Ragnarok" => "super-Herói\n",
    "Se beber não case" => "comédia\n",
    default => "Generô não identificado \n",
};

echo "O gênero do filme é: " . $genero;
