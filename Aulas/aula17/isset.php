<?php

  if(isset ($_POST["user_nome"])){
      echo "formulário enviado";
  }else{
      echo"Formulário não Enviado";
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form name="f_cad" method="POST" action="aula17.php">
        
        <label>Nome:</label><br>
        <input type="text" name="user_nome"><br>

        <input type="submit" value="Enviar">


    </form>
</body>
</html>

<?php

  }

?>
