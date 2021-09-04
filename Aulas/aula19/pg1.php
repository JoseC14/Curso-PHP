<?php
session_start();

if($_SESSION["vlog"]==true){


//unset($_SESSION["vnome"]);
$_SESSION["vcanal"]="vlog do fessor bruno";

echo "<h3>Segunda Página</h3>";

echo $_SESSION["vnome"]."<br>".$_SESSION["vtexto"];

isset($_SESSION["vcanal"]);
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
    <a href="pg2.php" target="_self">Teceira página</a>
</body>
</html>

<?php
}else{
    echo "Acesso indevido";
}

?>