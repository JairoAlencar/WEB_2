<?php 
$operação = $_GET['operação'];
    
switch($operação){
    case"soma";
        print $_GET["n1"]+$_GET["n2"]+$_GET["n3"]+$_GET["n4"];
    break;
    
    case"multiplicação";
        print $_GET["n1"]*$_GET["n2"]*$_GET["n3"]*$_GET["n4"];   
    break;    

    case"divisão";
        print $_GET["n1"]/$_GET["n2"]/$_GET["n3"]/$_GET["n4"];
    break;    

    case"subtração";
        print $_GET["n1"]-$_GET["n2"]-$_GET["n3"]-$_GET["n4"];
    break;    
}
