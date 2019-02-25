
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