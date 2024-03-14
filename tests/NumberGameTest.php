<?php

declare(strict_types=1);
namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\NumbersGame;
use PHPUnit\Framework\TestCase;

final class NumberGameTest extends TestCase
{

    /**
     * @test
     */
    public function shouldBeANumber()
    {
        $NumbersGame = new NumbersGame();

        $result = $NumbersGame->fizzbuzz(2);

        $this->assertIsInt($result);

    }
    /**
     * @test
     */
    public function shouldNotBeEmty()
    {
        $NumbersGame = new NumbersGame();

        $result = $NumbersGame->fizzbuzz(2);

        $this->assertNotNull($result);
    }
    /**
     * @test
     */
    public function shouldBeDividedBy3()
    {
        $NumbersGame = new NumbersGame();

        $result = $NumbersGame->fizzbuzz(9);

        $this->assertEquals(0,$result % 3);

    }

    /**
     * @test
     */
    public function shouldBeDividedBy5()
    {
        $NumbersGame = new NumbersGame();

        $result = $NumbersGame->fizzbuzz(25);

        $this->assertEquals(0,$result % 5);

    }

    /**
     * @test
     */
    public function shouldBeDividedBy15()
    {
        $NumbersGame = new NumbersGame();

        $result = $NumbersGame->fizzbuzz(30);

        $this->assertEquals(0,$result % 15);

    }


}
