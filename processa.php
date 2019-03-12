<?php

$vetor = array(
    0 => $_POST["n1"],
    1 => $_POST["n2"],
    2 => $_POST["n3"],
    3 => $_POST["n4"],
    4 => $_POST["n5"],
); 

        print "Os numeros pares são: <br>";
$maior=0;
        for($i=0; $i<count($vetor); $i++){
            if($vetor[$i]%2==0){
                print $vetor[$i]."<br>";
            }
            
            if($vetor[$i]>$maior){
                $maior=$vetor[$i];
            }
        }              
print "<br>o maior numero é: ".$maior; 


?>