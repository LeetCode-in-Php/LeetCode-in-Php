<?php

namespace leetcode\g0001_0100\s0084_largest_rectangle_in_histogram;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testLargestRectangleArea() {
        $solution = new Solution();
        $this->assertEquals(10, $solution->largestRectangleArea([2, 1, 5, 6, 2, 3]));
    }

    public function testLargestRectangleArea2() {
        $solution = new Solution();
        $this->assertEquals(4, $solution->largestRectangleArea([2, 4]));
    }
}
