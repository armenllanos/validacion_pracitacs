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
}
