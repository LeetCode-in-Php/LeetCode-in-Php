<?php

namespace leetcode\g0001_0100\s0070_climbing_stairs;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testClimbStairs() {
        $expected = 2;
        $solution = new Solution();
        $actual = $solution->climbStairs(2);
        $this->assertEquals($expected, $actual);
    }

    public function testClimbStairs2() {
        $expected = 3;
        $solution = new Solution();
        $actual = $solution->climbStairs(3);
        $this->assertEquals($expected, $actual);
    }
}
