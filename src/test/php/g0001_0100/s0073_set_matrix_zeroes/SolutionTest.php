<?php

namespace leetcode\g0001_0100\s0073_set_matrix_zeroes;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testSetZeroes() {
        $matrix = [[1, 1, 1], [1, 0, 1], [1, 1, 1]];
        $solution = new Solution();
        $solution->setZeroes($matrix);
        $this->assertEquals([[1, 0, 1], [0, 0, 0], [1, 0, 1]], $matrix);
    }

    public function testSetZeroes2() {
        $matrix = [[0, 1, 2, 0], [3, 4, 5, 2], [1, 3, 1, 5]];
        $solution = new Solution();
        $solution->setZeroes($matrix);
        $this->assertEquals([[0, 0, 0, 0], [0, 4, 5, 0], [0, 3, 1, 0]], $matrix);
    }
}
