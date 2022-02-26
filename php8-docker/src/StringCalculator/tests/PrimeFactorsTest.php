<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\PrimeFactors;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{

    protected function setUp(): void
    {

        parent::setUp();
        $this->primeFactor = new PrimeFactors();
    }

    /**
     * @test
     */
    public function number_1_does_not_have_factors()
    {
        $result = $this->primeFactor->calculatePrimeFactors(1);

        $this->assertEmpty($result);
    }
    /**
     * @test
     */
    public function number_2_has_1_factor_that_is_2()
    {
        $result = $this->primeFactor->calculatePrimeFactors(2);

        $this->assertEquals(2, $result[0]);
    }

}
