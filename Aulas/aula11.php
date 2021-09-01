<?php

$paises=array("Brasil ","Argentina ","EUA ","Canadá ");

 $size=count($paises);

 $i=0;


 for($i;$i<$size;$i++){

    echo $paises[$i]."<br>";

    if($i==1){
        break;//Resultado: Irá imprimir apenas Brasil e Argentina
    }
 }

 echo"<hr>";

  while($i<$size){
    echo $paises[$i];

    $i++;

    if($i==2){
        break;//Irá imprimir apenas Argentina porque parou no indíce 1
    }
}
echo "<hr>";
do{
    echo $paises[$i];

    $i++;
    
    if($i==3){
        break;//Irá imprimir apenas EUA porque parou no indíce 2
    }

}while($i<$size);
