<?php

namespace leetcode\g0001_0100\s0075_sort_colors;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testSortColors() {
        $array = [2, 0, 2, 1, 1, 0];
        $solution = new Solution();
        $solution->sortColors($array);
        $this->assertEquals([0, 0, 1, 1, 2, 2], $array);
    }

    public function testSortColors2() {
        $array = [2, 0, 1];
        $solution = new Solution();
        $solution->sortColors($array);
        $this->assertEquals([0, 1, 2], $array);
    }
}
