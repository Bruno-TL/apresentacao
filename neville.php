<?php

$cliente = [
    'Joao',
    'Fortaleza',
    '35',
];

$nome = $cliente[0];
$cidade = $cliente[1];
$idade = $cliente[2];

echo "$nome mora em $cidade e tem $idade anos";

//Listando todas as variáveis, utilizando menos linhas de código
list($nome, $cidade, $idade) = $cliente;
echo "$nome mora em $cidade e tem $idade anos";

// //Listando apenas algumas delas
list($nome, , $idade) = $cliente;
echo "$nome tem $idade anos";
