<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use function PHPUnit\Framework\stringContains;

class StringCalculator
{

    public function add(string $numerosParaSumar): int
    {
        if(strlen($numerosParaSumar) == 0) {
            return 0;
        }elseif (stringContains($numerosParaSumar,',') ){
            $numerosTrozos = explode(',',$numerosParaSumar);
            return (intval($numerosTrozos[0])+intval($numerosTrozos[1]));
        }else{
            return intval($numerosParaSumar);
        }

    }
}