<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações com Varíaveis</title>
</head>
<body>
    <?php
    
      $num1=10;
      $num2=5;

      echo $num1+$num2."<br>";//Resultado:15

      echo $num1*$num2."<br>";//Resultado:50

      echo $num1-$num2."<br>";//Resultado:5

      echo $num1/$num2."<br>";//Resultado:2

      echo $num1%$num2."<br>";//Resultado:0

      $num1+=2;

      echo $num1."<br>";//Resultado:12
      
      $num1-=2;

      echo $num1."<br>";//Resultado:8

      $num1 *=5;

      echo $num1."<br>";//Resultado:50

      $num1 /=5;

      echo $num1."<br>";//Resultado:10

      $num1 %=3;

      echo $num1."<br>";//Resultado:1

      

      
      

      $nome1="José Carlos";
      $nome2="Pereira Vieira";
      echo $nome1." ".$nome2."<br>";//Resultado: José Carlos Pereira Vieira
      
      $nome1.=" Morais da Silva";

      echo $nome1."<br>";//Resultado:José Carlos Morais da Silva

      
      
       
    

      ?>
</body>
</html>