<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes e Varíaveis</title>
</head>
<body>
    <?php
         //Varíaveis
        $vnome="Bruno";
        $vnum=10;
        $vnum2=20.5;
        $soma=0;

       //Constantes

       define("cnome","Bruno");
       define("ver",PHP_VERSION);
       define("dir",__DIR__);


        echo "Nome: $vnome<br>";
    
        $vnome="Campos";
        
        echo "Nome: $vnome<br>";
        $vnome="Bruno";
        echo "Nome ".$vnome."<br>";

        $vsoma=10+20;
        echo "Soma ".$vsoma."<br>";

        echo"<hr>";

        echo "Constante cnome: ".cnome."<br>";

        echo "Nome do arquivo ". __FILE__."<br>";

        echo "Versão do PHP: ".ver."<br>";

        echo "Pasta ".dir."<br>";

        echo "Versão do SO ".PHP_OS."<br>";

        echo "Número da linha ".__LINE__."<br>";
       
    ?>
</body>
</html>