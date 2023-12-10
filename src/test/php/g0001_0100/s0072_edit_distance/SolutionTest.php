<?php

namespace leetcode\g0001_0100\s0072_edit_distance;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testMinDistance() {
        $expected = 3;
        $solution = new Solution();
        $actual = $solution->minDistance("horse", "ros");
        $this->assertEquals($expected, $actual);
    }

    public function testMinDistance2() {
        $expected = 5;
        $solution = new Solution();
        $actual = $solution->minDistance("intention", "execution");
        $this->assertEquals($expected, $actual);
    }
}
