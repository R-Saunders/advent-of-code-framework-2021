<?php

declare(strict_types = 1);

namespace Illizian\AdventOfCode;

class DayOnePartTwo
{
    public static function process(array $input): int
    {
        return DayOnePartOne::process(
            collect($input)
                ->map(fn($val) => intval($val))
                ->sliding(3)
                ->map->sum()
                ->toArray()
        );
    }
}