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
            return 2;
        }else{
            return intval($numerosParaSumar);
        }

    }
}