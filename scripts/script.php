<?php
    require_once "./validation.php";

    $nome = $_POST['nome'];
    $idade = ($_POST['idade']);
    
    verifyCompetitor($nome, $idade, $category);