<?php

namespace Deg540\PHPTestingBoilerplate;

class StringCalculator
{
    public string $errores = '';
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
            $this->tieneErrores($numerosSeparados);
            if(strlen($this->errores) != 0) {
                return $this->errores;
            }
            return array_sum($numerosSeparados);
        }else{
            if(floatval($numerosParaSumar) < 0){
                return $this->errorNumeroNegativo(array($numerosParaSumar));
            }
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

    private function errorNumeroNegativo(array $numerosSeparados): string
    {
        $numerosNegativos =  array();
        foreach ($numerosSeparados as $numero){
            if(floatval($numero)<0){
                array_push($numerosNegativos,$numero);
            }
        }
        $error = "Negative not allowed: ";
        foreach ($numerosNegativos as $negativo){
            $error .= strval($negativo);
            $error .= ',';
        }
        return $error;

    }

    private function tieneErrores(array $numerosSeparados)
    {
        if(strlen($numerosSeparados[sizeof($numerosSeparados)-1]) == 0){
            $this->errores .= 'Number expected but FOF found,';
        }
        for ($index=0; $index<sizeof($numerosSeparados); $index++) {
            if(strlen($numerosSeparados[$index]) == 0){
                if($index != sizeof($numerosSeparados)-1){
                    $this->errores .= 'Number expected but \n found,';
                }
            }if(strlen(floatval($numerosSeparados[$index])) != strlen($numerosSeparados[$index])){
                if(strlen($numerosSeparados[$index]) != 0) {
                    $separadorDistinto = $this->aislarSeparador($numerosSeparados[$index]);
                    $this->errores .= "Number expected but $separadorDistinto found,";
                }
            }
        }
        foreach ($numerosSeparados as $separado){
            if(floatval($separado) < 0){
                $this->errores .= $this->errorNumeroNegativo($numerosSeparados);
                break;
            }
        }

    }


}