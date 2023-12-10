<?php

namespace leetcode\g0001_0100\s0074_search_a_2d_matrix;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testSearchMatrix() {
        $input = [[1, 3, 5, 7], [10, 11, 16, 20], [23, 30, 34, 60]];
        $solution = new Solution();
        $this->assertEquals(true, $solution->searchMatrix($input, 3));
    }

    public function testSearchMatrix2() {
        $input = [[1, 3, 5, 7], [10, 11, 16, 20], [23, 30, 34, 60]];
        $solution = new Solution();
        $this->assertEquals(false, $solution->searchMatrix($input, 13));
    }
}
