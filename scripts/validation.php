<?php

$category = [];
$category[0] = 'infantil';
$category[1] = 'adolescente';
$category[2] = 'adulto';

// $name = '';
// $idade = 0;

function classifyCategory($name, $idade, $category) {
    if($idade < 6){
        echo 'O competidor deve ter ao menos 6 anos de idade para que possa se inscrever na competição';
        return;
    }
    else if($idade >= 6 && $idade <= 12){
        for($i = 0; $i <= count($category); $i++){
            if($category[$i] == 'infantil'){
                print_r('A categoria de ' .$name .' é ' .$category[$i]);
            }
        }       
    }
    else if($idade >= 13 && $idade <= 18){
        for($i = 0; $i <= count($category); $i++){
            if($category[$i] === 'adolescente'){
                print_r('A categoria de ' .$name .' é ' .$category[$i]);
            }
        }
    }
    else if($idade > 18){
        for($i = 0; $i <= count($category); $i++){
            if($category[$i] == 'adulto'){
                print_r('A categoria de ' .$name .' é ' .$category[$i]);
            }
        }
    }
}

function verifyCompetitor($nome, $idade, $category){
    if(empty($nome)){
        echo 'O nome não pode ser vazio';
        return;
    }  
    if(is_numeric($nome)){
        echo 'Por favor, insira um nome válido';
        return;
    }   
    else if(strlen($nome) < 3){
        echo 'O nome precisa ter pelo menos 3 caracteres';
        return;
    }
    else if(strlen($nome) > 40){
        echo 'O nome não deve conter mais que 40 caracteres';
        return;
    }
    else if(empty($idade)){
        echo 'O campo de idade precisa ser preenchido';
        return;
    }
    else if(!is_numeric($idade)){
        echo 'Por favor, preencha o campo de idade corretamente';
        return;
    }
    
    else{
        classifyCategory($nome, $idade, $category);
    }
}




//classifyCategory('Edurado', 20, $category);
