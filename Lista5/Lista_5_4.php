<?php
    $prontuario = array(
        0 => "1831186",
        1 => "1831216",
        2 => "1831364",
        3 => "1831224",
     ); 
    
    for($i=0; $i<4; $i++){
        print "<a href='mostraNome.php?id=$prontuario[$i]'> $prontuario[$i] </a><br>";
    }
?>
