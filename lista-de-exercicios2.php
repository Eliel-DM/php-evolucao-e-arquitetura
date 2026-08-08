<?php

/*
Praticar é muito importante! Por isso, preparamos uma lista de exercícios para você exercitar o conteúdo abordado nesta aula.

    1 - Escreva um programa em PHP que inicialize um array de notas e exiba somente as 3 maiores notas do array.
    2 - Crie um programa em PHP que transforme a string “Vinicius Dias,1997,Programador” em um array em que cada item está separado por vírgulas.
    3 - Escreva uma função em PHP que receba um array de strings por parâmetro e o retorne ordenado em ordem alfabética.

Você pode clicar no botão “Opinião do instrutor” para conferir as respostas.
*/

// 1º Exercício 

$arrayNotas = [2.5, 6, 7.8, 9, 0, 12.9, 12.3, 45];
rsort($arrayNotas);
$arrayFinal = array_slice($arrayNotas, 0, 3); // O 0 é o índice de inicio, e o 3 é a quantidade de itens apartir do 0. E o true é para manter os valores os mesmos 
var_dump($arrayFinal);
