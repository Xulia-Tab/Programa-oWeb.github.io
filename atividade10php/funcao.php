<?php

/* Exercício 1 */
function gerarNumerosDecrescentes(int $inicio = 100, int $fim = 50): array
{
    $numeros = [];

    for ($numero = $inicio; $numero >= $fim; $numero--) {
        $numeros[] = $numero;
    }

    return $numeros;
}


/* Exercício 4 */
function obterPessoas(): array
{
    return [
        "Ana" => 20,
        "Carlos" => 35,
        "Beatriz" => 18,
        "Daniel" => 27,
        "Eduarda" => 23
    ];
}


/* Exercício 5: ordenar pela idade */
function ordenarPorIdade(array $pessoas): array
{
    asort($pessoas, SORT_NUMERIC);

    return $pessoas;
}


/* Exercício 5: ordenar pelo nome */
function ordenarPorNome(array $pessoas): array
{
    ksort($pessoas, SORT_NATURAL);

    return $pessoas;
}