<?php

    session_start();


    $category = [];
    $category[0] = 'infantil';
    $category[1] = 'adolescente';
    $category[2] = 'adulto';

    // $_SESSION = forma de persistir o estado da aplicação enquanto o navegador está aberto

    function classifyCategory($name, $idade, $category) {
        if($idade < 6){
            echo 'O competidor deve ter ao menos 6 anos de idade para que possa se inscrever na competição';        
            return;
        }
        else if($idade >= 6 && $idade <= 12){
            for($i = 0; $i <= count($category); $i++){
                if($category[$i] == 'infantil'){
                    $_SESSION['Success-Message'] = 'A categoria de ' .$name .' é ' .$category[$i];
                    header('location: ../index.php');
                    return;
                }
            }       
        }
        else if($idade >= 13 && $idade <= 18){
            for($i = 0; $i <= count($category); $i++){
                if($category[$i] === 'adolescente'){
                    $_SESSION['Success-Message'] = 'A categoria de ' .$name .' é ' .$category[$i];
                    header('location: ../index.php');
                    return;
                }
            }
        }
        else{
            for($i = 0; $i <= count($category); $i++){
                if($category[$i] == 'adulto'){
                    $_SESSION['Success-Message'] = 'A categoria de ' .$name .' é ' .$category[$i];
                    header('location: ../index.php');
                    return;
                }
            }
        }
    }

    function verifyCompetitor($nome, $idade, $category){
        if(empty($nome)){
            $_SESSION['Error'] = 'O nome não pode ser vazio';
            header('location: ../index.php');
            return;
        }  
        if(is_numeric($nome)){
            $_SESSION['Error'] = 'Por favor, insira um nome válido';
            header('location: ../index.php');
            return;
        }   
        else if(strlen($nome) < 3){
            $_SESSION['Error'] = 'O nome precisa ter pelo menos 3 caracteres';
            header('location: ../index.php');
            return;
        }
        else if(strlen($nome) > 40){
            $_SESSION['Error'] = 'O nome não deve conter mais que 40 caracteres';
            header('location: ../index.php');
            return;
        }
        else if(empty($idade)){
            $_SESSION['Error'] = 'O campo de idade precisa ser preenchido';
            header('location: ../index.php');
            return;
        }
        else if(!is_numeric($idade)){
            $_SESSION['Error'] = 'Por favor, preencha o campo de idade corretamente';
            header('location: ../index.php');
            return;
        }    
        else{
            classifyCategory($nome, $idade, $category);
        }
    }