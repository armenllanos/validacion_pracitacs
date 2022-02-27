<?php

namespace Deg540\PHPTestingBoilerplate\Test;

class StringCalculator
{

    public function add(string $numerosParaSumar): int
    {
        if(strlen($numerosParaSumar) == 0){
            return 0;
        }else{
            return intval($numerosParaSumar);
        }

    }
}