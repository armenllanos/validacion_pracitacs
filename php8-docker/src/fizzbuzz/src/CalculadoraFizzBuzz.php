<?php

namespace Deg540\PHPTestingBoilerplate;

class CalculadoraFizzBuzz
{
    function calculador(){
        $fizz = "Fizz";
        $buzz = "Buzz";
        for($númeroProfesora = 1; $númeroProfesora <= 100; $númeroProfesora++){
            if(($númeroProfesora%3) == 0){
                echo $fizz;
            }else if(($númeroProfesora%5) == 0){
                echo $buzz;
            }else if(($númeroProfesora%3) == 0 and ($númeroProfesora%5) == 0){
                echo ($fizz.$buzz);
            }else{
                echo $númeroProfesora;
            }
            echo "<br>";
        }

    }
}