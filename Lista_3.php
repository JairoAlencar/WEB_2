<?php print "Exercicio 1"."<br>"; ?>
<?php
    function primo(){
        $cont=0;
        $num=1;
            for($i=0; $i<=$num; $i++){
                if($num%$i==0){
                    $cont++;
                }
            }
            if($cont==2){
                print"Esse numero é primo"."<br>";
            }else{
                print"Esse numero não é primo"."<br>";
            }
            
    }
    primo();
?>

<?php print"<br>";
print "Exercicio 2"."<br>"; ?>
<?php

$num = range(0,100);

    foreach($num AS $i => $a){
        if($a%2!=0) {
             echo "$a ";
        }	
    }
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
		<?php $cores=array('Branco', 'Rosa', 'Laranja'); ?>
		 <li><?php print_r($cores[0]) ?></li>
		 <li><?php print_r($cores[1]) ?></li>
                 <li><?php print_r($cores[2]) ?></li>
        </ul>
</body>
</html>
    



