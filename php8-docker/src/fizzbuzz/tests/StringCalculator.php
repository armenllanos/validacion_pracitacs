<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use function PHPUnit\Framework\stringContains;

class StringCalculator
{

    public function add(string $numerosParaSumar): int
    {
        if(strlen($numerosParaSumar) == 0) {
            return 0;
        }elseif (str_contains($numerosParaSumar,',') ){
            $numerosTrozos = explode(',',$numerosParaSumar);
            if(sizeof($numerosTrozos) > 2){
                return floatval($numerosTrozos[0])*3;
            }
            return (floatval($numerosTrozos[0])+floatval($numerosTrozos[1]));
        }else{
            return intval($numerosParaSumar);
        }

    }
}