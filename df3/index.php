<?php

    if($_POST){
        $genero = $_POST['genero'];
    
        if($genero == "M" || $genero == "m"){
           $resultado =  "Seu género é masculino!";
        } elseif($genero == "F" || $genero == "f") {
           $resultado = "Seu género é feminino!";
        } else {
            $resultado = "Género invalido.";
        }
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3</title>
</head>
<body>
    <form method="POST">
        <label for="genero">Género</label> <br> <br>
        <input type="text" name="genero" placeholder="M ou F..." id="genero">
        <input type="submit" value="Enviar">
    </form>

    <p>
        <?php
            if($_POST){
                echo $resultado;
            }
        ?>
    </p>
</body>
</html>