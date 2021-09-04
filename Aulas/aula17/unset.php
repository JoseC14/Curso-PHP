<?php

$var="Olá";

$num =1;


switch($num){
    case 1:
        unset($var);
        break;
    case 2:
        isset($var);
        break;
}

echo $var;//Irá dar erro pois a varíavel foi destruída



