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
        <link rel="stylesheet" href="./styles.css">
        <title>Intro PHP</title>
    </head>

    <body>
        <label class="title">FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</label>

        <form action="script.php" method="post">

            <div class="input-container">
                <p class="form-label">Seu nome: <input class='input' type="text" name="name"/></p>                                 
                <?php
                    $errorMessage = getNameErrorMessage();
                    if(!empty($errorMessage)){
                        echo "<p class='message' style='color: red'>$errorMessage<p>";
                    }
                ?>
            </div>

            <div class="input-container">
                <p class="form-label">Sua idade: <input class='input' type="text" name="age"/></p>                       
                <?php
                    $errorMessage = getAgeErrorMessage();
                    if(!empty($errorMessage)){
                        echo "<p class='message' style='color: red'>$errorMessage<p>";
                    }
                ?>
            </div>

            <div class="input-container button-cotainer">
                <input class="button" type="submit" value="Enviar dados"/>
                <?php                
                    $successMessage = getSuccessMessage();
                    if(!empty($successMessage)){
                        echo "<p class='message' style='color: green'>$successMessage<p>";
                    }
                ?>
            </div>

        </form>
    </body>
</html>