<?php

namespace Kata\Tests;

use Kata\Adder;
use PHPUnit\Framework\TestCase;

class AdderTest extends TestCase
{
    /**
     * @dataProvider validSumsProvider
     */
    public function testValidSums(?int $a, ?int $b, int $expectedResult): void
    {
        $this->assertEquals(
            $expectedResult,
            (new Adder())->add($a, $b)
        );
    }

    public function validSumsProvider(): array
    {
        return [
            [null, null, 0],
            [0, 0, 0],
            [1, 1, 2]
        ];
    }
}
