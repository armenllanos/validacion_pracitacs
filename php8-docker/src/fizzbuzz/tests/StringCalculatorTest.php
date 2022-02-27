<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\Test\StringCalculatorTest;
use PHPUnit\Framework\TestCase;

class StringCalculatorTest extends TestCase
{
    /**
     * @test
     */
    public function empty_string_returns_0()
    {
        $stringCalculator = new StringCalculator();
        $result = $stringCalculator->add("");
        $this->assertEquals(0, $result);
    }
    /**
     * @test
     */
    public function single_number_string_returns_same_value()
    {
        $stringCalculator = new StringCalculator();
        $result = $stringCalculator->add("1");
        $this->assertEquals(1, $result);
    }
}
