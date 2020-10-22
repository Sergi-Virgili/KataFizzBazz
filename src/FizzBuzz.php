<?php

namespace App;

class FizzBuzz {
    for($i=1; $i<=100; $i++){
        multiply_by($i);
        echo $i
    }

    public function multiply_by($value){
        if($value % 3 == 0 && $value % 5 == 0){
            return "FizzBuzz";
        }
        if($value % 3 == 0){
           
            return "Fizz";
        }
        if($value % 5 == 0){
            return "Buzz";
        }
        else{
            return $value;
        }
        
        
        $numeros = []

    }

}



?>