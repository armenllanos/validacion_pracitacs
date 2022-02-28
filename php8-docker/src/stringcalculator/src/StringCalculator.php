<?php

namespace Deg540\PHPTestingBoilerplate;

class StringCalculator
{

    public function add(string $numerosParaSumar): string
    {
        if(strlen($numerosParaSumar) == 0) {
            return 0;
        }elseif (str_contains($numerosParaSumar,',') or (str_contains($numerosParaSumar,'\n'))){
            $numerosParaSumar = str_replace('\n',',',$numerosParaSumar);
            $numerosSeparados = explode(',',$numerosParaSumar);
            if(strlen($numerosSeparados[sizeof($numerosSeparados)-1]) == 0){
                return 'Number expected but FOF found';
            }
            foreach ($numerosSeparados as $numero){
                if(strlen($numero) == 0){
                    return 'Number expected but \n found';
                }
            }
            return array_sum($numerosSeparados);
        }else{
            return $numerosParaSumar;
        }

    }
}