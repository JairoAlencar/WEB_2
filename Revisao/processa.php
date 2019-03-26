<?php

$salario = $_POST["salario"];
$perc = $_POST["pencentual"];

function novo ($salario, $perc){
    $perc = $salario+($salario*($perc/100));
    return $perc;
}

print "Nome: ".$_POST["nome"]."<br>";
print "Salario: ".$salario."<br>";
print "Percentual: ".$perc."<br>";
print "Novo salario: ". novo($salario, $perc)."<br>";
