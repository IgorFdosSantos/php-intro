<?php
    function checkName(string $name): bool {
        if(empty($name)){
            setNameErrorMessage('O nome não pode ser vazio');
            return false;
        }  
        if(is_numeric($name)){
            setNameErrorMessage('Por favor, insira um nome válido');
            return false;
        }   
        else if(strlen($name) < 3){
            setNameErrorMessage('O nome precisa ter pelo menos 3 caracteres');
            return false;
        }
        else if(strlen($name) > 40){
            setNameErrorMessage('O nome não deve conter mais que 40 caracteres');
            return false;
        }
        return true;
    }

    function checkAge(string $age): bool {
        if(empty($age)){
            setAgeErrorMessage('O campo de idade precisa ser preenchido');
            return false;
        }
        else if(!is_numeric($age)){
            setAgeErrorMessage('Por favor, preencha o campo de idade corretamente');
            return false;
        }
        return true;
    }