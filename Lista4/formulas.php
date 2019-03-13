<?php
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$op = $_POST["op"];

    if($op=="+"){
        $resul=$n1+$n2;
    }elseif($op=="*"){
        $resul=$n1*$n2;
    }elseif($op=="-"){
        $resul=$n1-$n2;
    }elseif($op=="/"){
        $resul=$n1/$n2;
    }

echo "O resultado da operação é: $resul";


?>
