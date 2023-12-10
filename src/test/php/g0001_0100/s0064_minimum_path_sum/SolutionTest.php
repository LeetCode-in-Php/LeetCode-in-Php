<?php

namespace leetcode\g0001_0100\s0064_minimum_path_sum;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testMinPathSum() {
        $expected = 7;
        $input = array(array(1, 3, 1), array(1, 5, 1), array(4, 2, 1));
        $solution = new Solution();
        $actual = $solution->minPathSum($input);
        $this->assertEquals($expected, $actual);
    }

    public function testMinPathSum2() {
        $expected = 12;
        $input = array(array(1, 2, 3), array(4, 5, 6));
        $solution = new Solution();
        $actual = $solution->minPathSum($input);
        $this->assertEquals($expected, $actual);
    }
}
