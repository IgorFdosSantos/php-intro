<?php

$category = [];
$category[0] = 'infantil';
$category[1] = 'adolescente';
$category[2] = 'adulto';

// $name = '';
// $idade = 0;

function classifyCategory($name, $idade, $category) {
    if($idade >= 6 && $idade <= 12){
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


classifyCategory('Eduardo', 19, $category);