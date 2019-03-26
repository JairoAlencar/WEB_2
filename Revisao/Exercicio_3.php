<?php

$categoria = array(
    0 => "Doces",
    1 => "Salgados",
    2 => "Bebidas quentes",
    3 => "Bebidas Geladas",
    4 => "doce",
    5 => "algado",
    6 => "quente",
    7 => "gelado"
);

for($i=0; $i<4; $i++){
    $a = $i+4;
    print "<a href='exibe.php?categoria= $categoria[$a]'>$categoria[$i]</a><br>";
}
?>
