<?php
    print "Exercicio 3<br><br>";
?>
    <!DOCTYPE html>
<html>
<head>
	<title>FACE</title>
        <meta charset="utf-8">
</head>
<body>
    <h1>Abra uma conta</h1>
        <h3>É gratutito e sempre sera</h3>
     
    <div>    
        <input type="text" placeholder="Nome" name="nome_user">
        <input type="text" placeholder="Sobrenome" name="sobrenome_user">
            <br><br>
        <input type="text" placeholder="E-mail" name="email">
            <br><br>
        <input type="pasword" placeholder="Senha" name="senha">
    </div>    
        
        <h3>Aniversário</h3>    
        <select name="data">
            <option>Dia</option>
            <?php
            $soma=0;
            
                $vetor = array();
                for($i=0;$i<31;$i++){
                    $vetor[$i]=$i+1;
                    $soma=$soma+$i;    
                }
                   
                for($i=0; $i<31; $i++){
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
        
        <select name="mes">
            <option>Mês</option>
            <?php
               $vetor = array (
                   0=>jan,
                   1=>fev,
                   2=>mar,
                   3=>abr,
                   4=>mai,
                   5=>jun,
                   6=>jul,
                   7=>ago,
                   8=>set,
                   9=>out,
                   10=>nov,
                   11=>dez,
               );
               
               for($i=0; $i<=11; $i++){
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
        
        <select>
            <option>Ano</option>
            
        </select>
            <br><br>
            <button type="submit" name="" value="salvar">Abrir minha conta</button>
    </form>    
</body>
</html>