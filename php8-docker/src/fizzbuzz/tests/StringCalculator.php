<?php

namespace Deg540\PHPTestingBoilerplate\Test;




class StringCalculator
{

    public function add(string $numerosParaSumar): string
    {
        if(strlen($numerosParaSumar) == 0) {
            return 0;
        }elseif (str_contains($numerosParaSumar,',') or (str_contains($numerosParaSumar,'\n'))){
            $numerosParaSumar = str_replace('\n',',',$numerosParaSumar);
            $numerosTrozos = explode(',',$numerosParaSumar);
            $valorSuma = 0;
            if(strlen($numerosTrozos[sizeof($numerosTrozos)-1]) == 0){
                return 'Number expected but FOF found';
            }
            foreach ($numerosTrozos as $trozo){
                if(strlen($trozo) == 0){
                    return 'Number expected but \n found';
                }
                $valorSuma += floatval($trozo);
            }
            return $valorSuma;
        }else{
            return $numerosParaSumar;
        }

    }
}