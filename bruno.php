<?php
// Array associativo : CHAVE => VALOR ;
$vicio = "recheado";
$my_array = [
    "empresa" => "Sou energy",
    "vaiAcontecer" => "contratar", 
    "vicio" => "Coca-cola",
];

extract($my_array);

echo "<h1>Quando a {$empresa} me {$vaiAcontecer} vou gastar o meu salário com {$vicio}.</h1>";

// //////////////////////////////////////////////////////////////////////////
// extract($my_array, EXTR_PREFIX_SAME, "dup");

// echo "<h1>Quando a {$empresa} me {$vaiAcontecer} vou gastar o meu salário com {$vicio} e também {$dup_vicio}.</h1>";
?>