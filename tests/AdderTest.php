<?php
namespace Kata\Tests;

use Kata\Adder;

class AdderTest extends \PHPUnit_Framework_TestCase
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