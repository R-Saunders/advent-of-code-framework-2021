<?php

declare(strict_types = 1);

namespace Illizian\AdventOfCode;

class DayOnePartOne
{
    public static function process(array $input): int
    {
        return collect($input)
            ->map(fn($val) => intval($val))
            ->sliding()
            ->reduce(function($count,$chunk) {
                if ($chunk->last() > $chunk->first()){
                    return $count + 1;
                } else {
                    return $count;
                }
            },0);
    }
}