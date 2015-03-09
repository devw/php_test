<?php

use App\Libraries\Calculator;

/**
* CalculatorTest Class
*/
class CalculatorTest extends PHPUnit_Framework_TestCase
{
    public function inputNumbers()
    {
        return [
            [2, 2, 4],
            [2.5, 2.5, 5],
            [-3, 1, -2]
        ];
    }

    /**
     * @dataProvider inputNumbers
     * @return [type]
     */
    public function testAddNumbers($x, $y, $sum)
    {
        $calc = new Calculator;

        $this->assertEquals($sum, $calc->add($x, $y));
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
