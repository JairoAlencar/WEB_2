<?php


    $filmes = array();
    $filmes[0] = "Vingadores";
    $filmes[1] = "Os Simpsons";
    $filmes[2] = "Homen de ferro";
    $filmes[3] = "Frozen";
    $filmes[4] = "Homem Aranha";    
    $filmes[5] = "Big Hero";
    $filmes[6] = "Os Incriveis 2";
    $filmes[7] = "Pica-Pau";
    $filmes[8] = "Mickey";
    $filmes[9] = "Black Mirror";
    
    

    for($i=0; $i<10; $i++){
        echo "<li><a href='processa.php?id=$i'> $filmes[$i]</a></li>";
    }
