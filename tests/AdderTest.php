<?php
namespace Kata\Tests;

use PHPUnit\Framework\TestCase;
use Kata\Adder;

class AdderTest extends TestCase
{
    /**
     * @test
     * @dataProvider validSumsProvider
     * @param int $a
     * @param int $b
     * @param $expectedResult
     */
    public function validSums($a, $b, $expectedResult)
    {
        $this->assertEquals(
            $expectedResult,
            (new Adder())->add($a, $b)
        );
    }

    public function validSumsProvider()
    {
        return [
            [null, null, 0],
            [0, 0, 0],
            [1, 1, 2]
        ];
    }
}