//Exercicio 1
<?php 

$i=0;
$vetor = array();

    for($i=0;$i<51;$i++){
        $vetor[$i]=42;
         
    }
    echo "<pre>";
    print_r ($vetor);
    echo "</pre>";


//Exercico 2
	
	<?php 

$i=0;
$vetor = array();

    for($i=0;$i<51;$i++){
        $vetor[$i]=$i;
         
    }
    echo "<pre>";
    print_r ($vetor);
    echo "</pre>";


//Exercicio 3
	<?php 

$media=0;
$soma=0;
$vetor = array();

    for($i=0;$i<30;$i++){
        $vetor[$i]=$i+1;
        $soma=$soma+$i;    
    }
    $resultado=array();
        for($i=1; $i<30; $i++){
            if($vetor[$i]>$vetor[$i-1]){
                $resultado[0]=$vetor[$i];
                $resultado[1]=$i;
                $media+=1;
            }
        }
    
    echo "<pre>";
    print_r ($vetor);
    echo "</pre>";
    
print "Maior valor:".$i."<br>";
print "Que esta na posição:".$resultado[1];
print "<br>"."A soma de todos esse valores é:".$soma."<br>";
print "A media é de:".$soma/$media;



//Exercicio 4
	<?php 

$i=0;
$vetor = array();

    for($i=0;$i<51;$i++){
        $vetor[$i]=$i*2;
         
    }
    echo "<pre>";
    print_r ($vetor);
    echo "</pre>";

//Exercicio 5

<select>
    <?php

        $vetor = array(
            0=>Cachorro,
            1=>Galinha,
            2=>Cavalo,
            3=>Eletronica,
            4=>Mesa,
            5=>Computador,
            6=>Celular,
            7=>Giraffa,
            8=>Camelo,
            9=>Mochila,
        );

        for($i=0; $i<10; $i++){
            ?>

    <option>
        <?php 
            echo $vetor[$i];
        ?>
    </option>
        <?php
        }
        ?>
</select>
