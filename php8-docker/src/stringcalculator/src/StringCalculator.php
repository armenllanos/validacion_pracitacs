<?php

namespace Deg540\PHPTestingBoilerplate;

class StringCalculator
{

    public function add(string $numerosParaSumar): string
    {
        $separator = ',';
        if(str_contains($numerosParaSumar,'//')){
            $separator = $this->newCustomSeparator($numerosParaSumar);
            $numerosParaSumar = substr($numerosParaSumar,stripos($numerosParaSumar,'\n')+2);
        }
        if(strlen($numerosParaSumar) == 0) {
            return 0;
        }elseif (str_contains($numerosParaSumar,$separator) or (str_contains($numerosParaSumar,'\n'))){
            $numerosParaSumar = str_replace('\n',$separator,$numerosParaSumar);
            $numerosSeparados = explode($separator,$numerosParaSumar);
            if(strlen($numerosSeparados[sizeof($numerosSeparados)-1]) == 0){
                return 'Number expected but FOF found';
            }
            foreach ($numerosSeparados as $numero){
                if(strlen($numero) == 0){
                    return 'Number expected but \n found';
                }if(strlen(floatval($numero)) != strlen($numero)){
                    $separadorDistinto = $this->aislarSeparador($numero);
                    return "Number expected but $separadorDistinto found";
                }
            }
            return array_sum($numerosSeparados);
        }else{
            return $numerosParaSumar;
        }

    }

    public function newCustomSeparator(string $numerosParaSumar): string
    {
        $nuevoSeparador =',';
        $auxString = $numerosParaSumar;
        if(strpos('//',$numerosParaSumar)==0){
            $auxString = substr($numerosParaSumar,stripos($numerosParaSumar,'//')+2);
            $nuevoSeparador =  substr($auxString,0,stripos($auxString,'\n'));
        }
        return $nuevoSeparador;
    }

    private function aislarSeparador(string $numero): string
    {
        return substr($numero,1,1);
    }
}