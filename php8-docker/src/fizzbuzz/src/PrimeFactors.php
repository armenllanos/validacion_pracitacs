<?php

namespace Deg540\PHPTestingBoilerplate;

class PrimeFactors
{
    function calculatePrimeFactors(int $numero): array{
        $primeFactorsList = array();
        $divisor = 2;
        while(($numero != 1) and ($divisor == $numero)){
            if (($numero % $divisor) == 0) {
                array_push($primeFactorsList,"$divisor");
                $divisor = 1;
                $numero /= $divisor;
            } else {
                $divisor++;
            }
        }
        return $primeFactorsList;
    }
}