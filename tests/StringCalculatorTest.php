<?php

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\StringCalculator;
use PHPUnit\Framework\TestCase;

final class StringCalculatorTest extends TestCase
{
    /**
     * @test
     */
    public function  shouldReturnNullSum()
    {
        $calculator = new StringCalculator();

        $result = $calculator->add("");

        $this->assertEquals(0,$result);
    }

    /**
     * @test
     */
    public function  shouldReturnNumber()
    {
        $calculator = new StringCalculator();

        $op = "1";

        $result = $calculator->add($op);

        $this->assertEquals(intval($op),$result);
    }

    /**
     * @test
     */
    public function  shouldReturnSum()
    {
        $calculator = new StringCalculator();

        $op = "//;\n1;2;3";

        $result = $calculator->add($op);

        $this->assertEquals(6,$result);
    }
    /**
     * @test
     */
    public function  shouldBePositiveNumbers()
    {
        $calculator = new StringCalculator();

        $op = "1,2";

        $result = $calculator->isNegativeSequence($op);

        $this->assertEquals(false,$result);
    }


    /**
     * @test
     */
    public  function shouldBeLesserThan1000()
    {
        $calculator = new StringCalculator();

        $op = array("2","100");

        $result = $calculator->areNumbersOutOfBounds($op);

        $this->assertEquals(false,$result['outOfBounds']);
    }


}
