<?php

namespace Deg540\PHPTestingBoilerplate\Test;


use Deg540\PHPTestingBoilerplate\StringCalculator;
use PHPUnit\Framework\TestCase;

class StringCalculatorTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->stringCalculator = new StringCalculator();
    }

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
        $result = $this->stringCalculator->add("1");
        $this->assertEquals(1, $result);
    }
    /**
     * @test
     */
    public function string_of_2_twos_returns_4()
    {
        $result = $this->stringCalculator->add("2,2");
        $this->assertEquals(4, $result);
    }
    /**
     * @test
     */
    public function string_of_2_ones_dot_five_returns_3()
    {
        $result = $this->stringCalculator->add("1.5,1.5");
        $this->assertEquals(3, $result);
    }
    /**
     * @test
     */
    public function string_of_3_ones_returns_3()
    {
        $result = $this->stringCalculator->add("1,1,1");
        $this->assertEquals(3, $result);
    }
    /**
     * @test
     */
    public function string_of_3_twos_returns_6()
    {
        $result =$this->stringCalculator->add("2,2,2");
        $this->assertEquals(6, $result);
    }
    /**
     * @test
     */
    public function string_of_2_twos_and_1_one_returns_5()
    {
        $result = $this->stringCalculator->add("2,2,1");
        $this->assertEquals(5, $result);
    }
    /**
     * @test
     */
    public function string_of_2_twos_and_1_newline_separator_returns_4()
    {
        $result = $this->stringCalculator->add('2\n2');
        $this->assertEquals(4, $result);
    }
    /**
     * @test
     */
    public function string_of_two_one_and_three_and_newline_separator_returns_6()
    {
        $result = $this->stringCalculator->add('1\n2,3');
        $this->assertEquals(6, $result);
    }
    /**
     * @test
     */
    public function string_of_1N3_returns_error()
    {
        $result = $this->stringCalculator->add('1,\n3');
        $this->assertEquals('Number expected but \n found,', $result);
    }
    /**
     * @test
     */
    public function string_of_1_coma_nothing_returns_incomplete_error()
    {
        $result = $this->stringCalculator->add('1,');
        $this->assertEquals('Number expected but FOF found,', $result);
    }
    /**
     * @test
     */
    public function string_semicolon_is_separated_correctly()
    {
        $result = $this->stringCalculator->newCustomSeparator('//;\n');
        $this->assertEquals(';', $result);
    }
    /**
     * @test
     */
    public function string_different_separator_one_semicolon_two_returns_3()
    {
        $result = $this->stringCalculator->add('//;\n1;2');
        $this->assertEquals(3, $result);
    }
    /**
     * @test
     */
    public function string_different_separator_one_aep_one_returns_2()
    {
        $result = $this->stringCalculator->add('//aep\n1aep1');
        $this->assertEquals(2, $result);
    }
    /**
     * @test
     */
    public function string_multiple_different_separators_one_aep_one_returns_error()
    {
        $result = $this->stringCalculator->add('//aep\n1aep1,2');
        $this->assertEquals("Number expected but , found,", $result);
    }
    /**
     * @test
     */
    public function string_negative_number_returns_error()
    {
        $result = $this->stringCalculator->add('-1,-2');
        $this->assertEquals("Negative not allowed: -1,-2,", $result);
    }
    /**
     * @test
     */
    public function string_negative_number_and_incomplete_returns_double_error()
    {
        $result = $this->stringCalculator->add('-1,-2,');
        $this->assertEquals("Number expected but FOF found,Negative not allowed: -1,-2,", $result);
    }

}
