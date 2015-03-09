<?php

use App\Libraries\Calculator;

/**
* CalculatorTest Class
*/
class CalculatorTest extends PHPUnit_Framework_TestCase
{

    protected function setUp()
    {
        $this->calculator = new Calculator;
    }

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
        $this->assertEquals($sum, $this->calculator->add($x, $y));
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testThrowsExeptionIfNoNumberIsPassed($value='')
    {
        $this->calculator->add('a', []);
    }
}
