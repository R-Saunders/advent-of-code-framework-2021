<?php

use Illizian\AdventOfCode\DayOnePartOne;
use Illizian\AdventOfCode\DayOnePartTwo;
use Illizian\AdventOfCode\Helpers\Loader;

it('can process the example input for part one and return the provided answer', function () {
    expect(
        DayOnePartOne::process(
            Loader::load(__DIR__ . '/fixtures/day-one-example.txt')
        )
    )->toEqual(7);
});

it('can process the example input for part two and return the provided answer', function () {
    expect(
        DayOnePartTwo::process(
            Loader::load(__DIR__ . '/fixtures/day-one-example.txt')
        )
    )->toEqual(5);
});

it('can process the first puzzle input', function() {
    expect(
        DayOnePartOne::process(
            Loader::load(__DIR__ . '/fixtures/day-one.txt')
        )
    )->toEqual("<insert-your-answer-here>");
});

it('can process the second puzzle input', function() {
    expect(
        DayOnePartTwo::process(
            Loader::load(__DIR__ . '/fixtures/day-one.txt')
        )
    )->toEqual("<insert-your-answer-here>");
});
