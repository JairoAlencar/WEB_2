<?php

    $v1=$_GET['v1'];
    $v3=$_GET['v2'];
    $v3=$_GET['v3'];
    $v4=$_GET['v4'];
    $v5=$_GET['v5'];
    
    
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
            print"Os numeros multiplos de 3 e 5 são: ".$mult;