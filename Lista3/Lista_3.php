<?php print "Exercicio 1<br>"; ?>
<?php
$num=10;
    function primo($num){
        $cont=0;
        $primo=1;
            while($primo<=$num){
                if($num%$primo==0){
                    $cont++;
            }
            
            $primo++;
            
            }
            if($cont==2){
                return true;
            }else{
                return false;
            }
    }
    
        if(primo($num)){
            print $num. " Primo<br>";
        }else{
            print $num. " Composto<br>";
        }
 
?>

<?php print"<br>";
print "Exercicio 2"."<br>"; ?>
<?php

function primo_rand(){
    $num = range(0,100);

    foreach($num AS $i => $a){
        if($a%2!=0) {
             echo "$a ";
        }	
    }
}
primo_rand();
print"<br>";
?> 

<?php print"<br>";
print "Exercicio 3"."<br>"; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<ul>
		<?php $cores=array('Branco', 'Preto', 'Laranja'); ?>
		 <li><?php print_r($cores[0]) ?></li>
		 <li><?php print_r($cores[1]) ?></li>
                 <li><?php print_r($cores[2]) ?></li>
        </ul>
</body>
</html>
    



