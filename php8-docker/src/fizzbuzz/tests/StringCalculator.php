<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use function PHPUnit\Framework\stringContains;

class StringCalculator
{

    public function add(string $numerosParaSumar): float
    {
        if(strlen($numerosParaSumar) == 0) {
            return 0;
        }elseif (str_contains($numerosParaSumar,',') ){
            $numerosTrozos = explode(',',$numerosParaSumar);
            $valorSuma = 0;
            foreach ($numerosTrozos as $trozo){
                $valorSuma += floatval($trozo);
            }
            return $valorSuma;
        }else{
            return intval($numerosParaSumar);
        }

    }
}