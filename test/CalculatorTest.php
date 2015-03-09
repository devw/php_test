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

        $values = [
            [2, 2, 4],
            [2.5, 2.5, 5],
            [-3, 1, -2]
        ];

        foreach ($values as $numbers) {
            $this->assertEquals($numbers[2], $calc->add($numbers[0], $numbers[1]));
        }
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
