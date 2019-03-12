<?php
    print "Exercicio 4<br><br>";
?>
    <!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
        <meta charset="utf-8">
</head>
<body>
    <form action="formulas.php" method="POST">
        Numero 1 <input type="number" name="n1">
            <br><br>
        Numero 2 <input type="Number" name="n2">
            <br><br>
            
        Soma<input type="radio"
               name="op"
               value="+">    
        
        Multiplicação<input type="radio"
                            name="op"
                            value="*">
     
        Subtração<input type="radio"
                        name="op"
                        value="-">
        
        Divisão<input type="radio"
                      name="op"
                      value="/">
        <br><br>
        <button type="submit" name="" value="enviar">Calcular</button>
    </form>    
</body>
</html>