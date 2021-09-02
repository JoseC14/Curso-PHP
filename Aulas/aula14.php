<?php 

   function contagem($cont){
    if($cont!=0){
        echo "Estamos no número $cont<br>";
        contagem($cont-1);
    }

}

contagem(10);