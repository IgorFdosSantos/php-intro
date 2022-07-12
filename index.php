<?php
    session_start(); // Inicia a sessão HTTP
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="IgorF-Santos">
        <meta name="description" content="Introdução a PHP">
        <meta name="viewport" content="width=device.width, initial-scale=1">
    </head>

    <body>
        <p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>

        <form action="./scripts/script.php" method="post">
            <?php
                $errorMessage = isset($_SESSION['Error']) ? $_SESSION['Error'] : '';
                if(!empty($errorMessage)){
                    echo $errorMessage;
                }

                $successMessage = isset($_SESSION['Success-Message']) ? $_SESSION['Success-Message'] : '';
                if(!empty($successMessage)){
                    echo $successMessage;
                }
            ?>

            <p>Your name: <input type="text" name="nome"/></p>
            <p>Your age: <input type="number" name="idade"/></p>
            <p><input type="submit" value="Enviar dados"/></p>
        </form>
    </body>
</html>