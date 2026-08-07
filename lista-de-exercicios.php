<?php

/*
Praticar é muito importante! Por isso, preparamos uma lista de exercícios para você exercitar o conteúdo abordado nesta aula.

1 - Escreva uma função em PHP que receba dois números inteiros e uma string representando a operação matemática e retorne o resultado da operação.
2 - Crie uma função em PHP que calcule o IMC baseado na altura e peso passados por parâmetro.
3 - Crie uma função em PHP que converta graus celsius para Fahrenheit.

*/

//Exercício 01


function operacaoMatematicaPersonalizada(string $operacao, float $primeiroNumero, float $segundoNumero) {
    $resultadoFinal = 0;
    $operacaoLowCase = strtolower($operacao);
    switch ($operacaoLowCase) {
        case $operacaoLowCase == "soma":
            $resultadoFinal = $primeiroNumero + $segundoNumero;
            echo "O resultado final da $operacao é:" . $resultadoFinal;
            break;
        case $operacaoLowCase == "subtracao":
            $resultadoFinal = $primeiroNumero - $segundoNumero;
            echo "O resultado final da $operacao é:" . $resultadoFinal;
            break;
        case $operacaoLowCase == "multiplicacao":
            $resultadoFinal = $primeiroNumero * $segundoNumero;
            echo "O resultado final da $operacao é:" . $resultadoFinal;
            break;
        case $operacaoLowCase == "divisao":
            $resultadoFinal = $primeiroNumero / $segundoNumero;
            echo "O resultado final da $operacao é:" . $resultadoFinal;
            break;
        default:
            echo "Operação inserida não é válida, favor validar se não tem acentuações ou outros caracteres. Ex de operação: 'subtracao'!";
    }
}


operacaoMatematicaPersonalizada("multiplicacao", 100, 10);
