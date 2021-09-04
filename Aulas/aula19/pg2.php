<?php
session_start();

//unset($_SESSION["vnome"]);


echo "<h3>Terceira página Página</h3>";
echo "<br>".$_SESSION["vnome"];
echo "<br>".$_SESSION["vtexto"];
echo "<br>".$_SESSION["vcanal"];

unset($_SESSION["vcanal"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <a href="aula19.php" target="_self">Voltar aula 19</a>
    <br>
    <a href="pg1.php" target="_self">Segunda página</a>
</body>
</html>