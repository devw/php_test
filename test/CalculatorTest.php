<?php

require 'app/libraries/Calculator.php'; 

/**
* CalculatorTest Class
*/
class CalculatorTest extends PHPUnit_Framework_TestCase
{
    public function testAddNumbers()
    {
        $calc = new Calculator;

        $this->assertEquals(4, $calc->add(2,2));
    }
}
