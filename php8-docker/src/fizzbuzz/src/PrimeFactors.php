<?php

namespace Deg540\PHPTestingBoilerplate;

class PrimeFactors
{
    function primeFactors(int $numero): array{
        $primeFactorsList = array();
        $divisor = 1;
        while($numero != 1){
            if(($numero%$divisor) == 0){
                $primeFactorsList = array_push($primeFactorsList,$numero);
                $divisor = 1;
                $numero /= $divisor;
            }else{
                $divisor++;
            }
        }
        return $primeFactorsList;
    }
}