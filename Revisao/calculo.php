<?php
$vetor = array();
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    
   
$par=array();
$impar=array();
$soma=0;
$med=0;
$num=0;

for($i=$n1; $i<$n2; $i++){
    $soma=$soma+$i;
    $med++;
    if($i%2==0){
        $par[$num]=$i;
        $num++;
    }else{
        $impar[$num]=$i;
        $num++;
    }
    
}





print "Valor inicial=".$n1.", valor final=".$n2.".<br><br>";
print "Valores pares entre ".$n1." e ".$n2."<br>".implode($par, "<br>")."<br><br>";
print "Valores impares entre ".$n1." e ".$n2."<br>".implode($impar, "<br>")."<br><br>";
print "A media é: ".($soma/$med);