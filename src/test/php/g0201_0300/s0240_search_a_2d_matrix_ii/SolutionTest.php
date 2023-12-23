<?php

namespace leetcode\g0201_0300\s0240_search_a_2d_matrix_ii;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testSearchMatrix() {
        $matrix = array(
            array(1, 4, 7, 11, 15),
            array(2, 5, 8, 12, 19),
            array(3, 6, 9, 16, 22),
            array(10, 13, 14, 17, 24),
            array(18, 21, 23, 26, 30)
        );
        $this->assertEquals(true, (new Solution())->searchMatrix($matrix, 5));
    }

    public function testSearchMatrix2() {
        $matrix = array(
            array(1, 4, 7, 11, 15),
            array(2, 5, 8, 12, 19),
            array(3, 6, 9, 16, 22),
            array(10, 13, 14, 17, 24),
            array(18, 21, 23, 26, 30)
        );
        $this->assertEquals(false, (new Solution())->searchMatrix($matrix, 20));
    }
}
