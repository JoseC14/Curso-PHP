<?php
session_start();

$_SESSION["vnome"]="José";
$_SESSION["vtexto"]="texto para teste";
$_SESSION["vlog"]=false;



//unset($_SESSION["vnome"]);
echo $_SESSION["vnome"]."<br>".$_SESSION["vtexto"];

//session_destroy();
if(isset($_SESSION["vcanal"])){
    echo "<br>".$_SESSION["vcanal"];
}else{
    echo "<br>Variável vcanal não foi definida";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessões</title>
</head>
<body>
    <br>
    <a href="pg1.php" target="_self">Segunda Página</a>
</body>
</html>