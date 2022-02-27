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
    /**
     * @test
     */
    public function string_of_2_ones_returns_2()
    {
        $stringCalculator = new StringCalculator();
        $result = $stringCalculator->add("1,1");
        $this->assertEquals(2, $result);
    }
    /**
     * @test
     */
    public function string_of_2_twos_returns_4()
    {
        $stringCalculator = new StringCalculator();
        $result = $stringCalculator->add("2,2");
        $this->assertEquals(4, $result);
    }
    /**
     * @test
     */
    public function string_of_2_ones_dot_five_returns_3()
    {
        $stringCalculator = new StringCalculator();
        $result = $stringCalculator->add("1.5,1.5");
        $this->assertEquals(3, $result);
    }
    /**
     * @test
     */
    public function string_of_3_ones_returns_3()
    {
        $stringCalculator = new StringCalculator();
        $result = $stringCalculator->add("1,1,1");
        $this->assertEquals(3, $result);
    }
    /**
     * @test
     */
    public function string_of_3_twos_returns_6()
    {
        $stringCalculator = new StringCalculator();
        $result = $stringCalculator->add("2,2,2");
        $this->assertEquals(6, $result);
    }

}
