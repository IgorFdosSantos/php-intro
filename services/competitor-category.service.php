<?php     
     /* 
        $category = [];
        $category[0] = 'infantil';
        $category[1] = 'adolescente';
        $category[2] = 'adulto';
      */    

     function defineCompetitorCategory(string $name, string $age): ?string {
        $category = ['infantil', 'adolescente', 'adulto'];

        if(checkName($name) && checkAge($age)){
            unSetErrorMessage();

            if($age < 6){
                echo 'O competidor deve ter ao menos 6 anos de idade para que possa se inscrever na competição';        
                return null;
            }
            else if($age >= 6 && $age <= 12){
                for($i = 0; $i <= count($category); $i++){
                    if($category[$i] == 'infantil'){
                        setSuccessMessage('A categoria de ' .$name .' é ' .$category[$i]);
                        return null;
                    }
                }       
            }
            else if($age >= 13 && $age <= 18){
                for($i = 0; $i <= count($category); $i++){
                    if($category[$i] === 'adolescente'){
                        setSuccessMessage('A categoria de ' .$name .' é ' .$category[$i]);
                        return null;
                    }
                }
            }
            else{
                for($i = 0; $i <= count($category); $i++){
                    if($category[$i] == 'adulto'){
                        setSuccessMessage('A categoria de ' .$name .' é ' .$category[$i]);
                        return null;
                    }
                }
            }
        }
        else{
            unSetSuccessMessage();
            return getAgeErrorMessage();
        }
    }