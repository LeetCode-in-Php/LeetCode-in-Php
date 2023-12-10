<?php

namespace leetcode\g0001_0100\s0078_subsets;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testSubsets() {
        $expected = [[], [1], [1, 2], [1, 2, 3], [1, 3], [2], [2, 3], [3]];
        $solution = new Solution();
        $this->assertEquals($expected, $solution->subsets([1, 2, 3]));
    }

    public function testSubsets2() {
        $expected = [[], [0]];
        $solution = new Solution();
        $this->assertEquals($expected, $solution->subsets([0]));
    }
}
