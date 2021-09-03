<?php

function fat($num){

     if($num<0){
         return -1;
     }
     if($num<=0){
         return 1;
     }

      return $num*fat($num-1);
}

echo fat(4);


