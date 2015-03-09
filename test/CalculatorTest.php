<?php

use App\Libraries\Calculator;

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

    /**
     * @expectedException InvalidArgumentException
     */
    public function testThrowsExeptionIfNoNumberIsPassed($value='')
    {
        $calc = new Calculator;

        $calc->add('a', []);
    }
}
