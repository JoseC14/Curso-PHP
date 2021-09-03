<?php

$dia = date("d");
$mes= date("n");
$ano= date("Y");

$hora= date("h");
$minuto=date("i");
$segundos=date("s");

$meses=array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");

echo "Estamos no dia $dia do mês ".$meses[$mes-1]." do ano $ano <br>";
echo "Estamos no horário $hora:$minuto:$segundos <br>";
