<?php

namespace Kata;

class Adder
{
    public function add(?int $first, ?int $second): int
    {
        return (int) $first + (int) $second;
    }
}
