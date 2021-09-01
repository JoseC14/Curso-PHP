<?php

$transportes=array(5);

$dados=array(
    
    "nome"=>"José",
    "cidade"=>"Ceará",
    "curso" =>"PHP"

);

$carros=array(
    
    array("Sedan",65000),
    array("Palio",35000),
    array("Nissan",50000)
);

$i=6;

$transportes[0]="Carro";
$transportes[1]="Avião";
$transportes[2]="Navio";
$transportes[3]="Moto";
$transportes[4]="Onibus";
$transportes[5]=123456;
$transportes[6]=$dados["nome"];

echo "Elemento de Indíce $i = ".$transportes[$i]."<br>";

echo "Nome: ".$dados["nome"]." - Cidade: ".$dados["cidade"]." - Curso: ".$dados["curso"]."<hr>";

echo "Carro A ".$carros[0][0]." - Valor: ".$carros[0][1]."<br>";
echo "Carro B ".$carros[1][0]." - Valor: ".$carros[1][1]."<br>";
echo "Carro C ".$carros[2][0]." - Valor: ".$carros[2][1]."<br>";

var_dump($dados)."<br>";

$size=count($transportes);

echo $size;