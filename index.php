<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Atividade</title>
    </head>
    <body>
        <?php
            $valor = $_GET['number'];
            $valor = 2;
            $valor2 = 3;
            
            if ($valor % 2 == 1)
            echo "$valor é ímpar";
            else 
            echo "$valor é par";
            echo ("</br>");
            if ($valor2 % 2 == 1)
            echo "$valor2 é ímpar";
            else
            echo "$valor2 é par";
        ?>
    </body>
</html>