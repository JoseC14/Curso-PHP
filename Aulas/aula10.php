<?php

$dados=array(
    
    "nome"=>"José",
    "cidade"=>"Ceará",
    "curso" =>"PHP"
);

foreach($dados as $date => $info ){
    echo $date." - ".$info."<br>";
}/*Resultado nome - José
cidade - Ceará
curso - PHP*/

$cores=array("Vermelho","Azul","Verde","Amarelo");

foreach($cores as $x){
    echo "Cor $x<br>";
}