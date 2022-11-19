<?php 
$animais = ['cachorro', 'Zebra', 'Alpaca'];
sort($animais);
$animaisAleatorio = $animais;

foreach($animaisAleatorio as $animaisEmOrdem)
{
    echo "<h1>{$animaisEmOrdem}</h1>", "\n";
}

echo "</br>";

$numeros = ['5','3','2'];
sort($numeros);
$numerosAleatorios = $numeros;

foreach($numerosAleatorios as $numerosEmOrdem)
{
    echo "<h1>{$numerosEmOrdem}</h1>", "\n";
}  