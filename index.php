<?php
    include 'services/session-message.service.php';
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

        <form action="script.php" method="post">
            <?php
                $errorMessage = getErrorMessage();
                if(!empty($errorMessage)){
                    echo "<p style='color: red'>$errorMessage<p>";
                }

                $successMessage = getSuccessMessage();
                if(!empty($successMessage)){
                    echo "<p style='color: green'>$successMessage<p>";                    
                }
            ?>

            <p>Your name: <input type="text" name="name"/></p>
            <p>Your age: <input type="number" name="age"/></p>
            <p><input type="submit" value="Enviar dados"/></p>
        </form>
    </body>
</html>