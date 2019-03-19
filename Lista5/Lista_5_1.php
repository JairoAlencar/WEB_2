<?php

$vetor=array(
    0=> $_GET['v1'],
    1=> $_GET['v2'],
    2=> $_GET['v3'],
    3=> $_GET['v4'],
    4=> $_GET['v5'],
);
    

    $maior=0;
$c=0;    
        for($i=0;$i<count($vetor); $i++){
            if($vetor[$i]%2==0){
                //print $vetor[$i]."<br>";
            }
            
            if($vetor[$i]>$maior){
                $maior=$vetor[$i];
            }
            
            if($vetor[$i]%3==0&&$vetor[$i]%5==0){
                $mult[$c]=$vetor[$i];
            }
        }    
        print "Os numeros pares são:" .implode($vetor, ", ");          
        print "<br>o maior numero é: ".$maior."<br>"; 
        print"Os numeros multiplos de 3 e 5 são: " .implode($mult);