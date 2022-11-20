<?php 
$animais = ['cachorro', 'Zebra', 'Alpaca'];
sort($animais);
$novosAnimais = $animais;

foreach($novosAnimais as $animaisEmOrdem)
{
    echo "<h1>{$animaisEmOrdem}</h1>", "\n";
}

echo "</br>";

$numeros = ['5','3','2'];
sort($numeros);
$novosNumeros = $numeros;

foreach($novosNumeros as $numerosEmOrdem)
{
    echo "<h1>{$numerosEmOrdem}</h1>", "\n";
}  
