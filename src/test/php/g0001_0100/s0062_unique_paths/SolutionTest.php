<?php

namespace leetcode\g0001_0100\s0062_unique_paths;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testUniquePaths() {
        $expected = 28;
        $solution = new Solution();
        $actual = $solution->uniquePaths(3, 7);
        $this->assertEquals($expected, $actual);
    }

    public function testUniquePaths2() {
        $expected = 3;
        $solution = new Solution();
        $actual = $solution->uniquePaths(3, 2);
        $this->assertEquals($expected, $actual);
    }
}
