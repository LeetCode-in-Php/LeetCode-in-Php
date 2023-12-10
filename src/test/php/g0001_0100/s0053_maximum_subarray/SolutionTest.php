<?php

namespace leetcode\g0001_0100\s0053_maximum_subarray;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testMaxSubArray() {
        $expected = 6;
        $input = array(-2, 1, -3, 4, -1, 2, 1, -5, 4);
        $solution = new Solution();
        $actual = $solution->maxSubArray($input);
        $this->assertEquals($expected, $actual);
    }

    public function testMaxSubArray2() {
        $expected = 1;
        $input = array(1);
        $solution = new Solution();
        $actual = $solution->maxSubArray($input);
        $this->assertEquals($expected, $actual);
    }

    public function testMaxSubArray3() {
        $expected = 23;
        $input = array(5, 4, -1, 7, 8);
        $solution = new Solution();
        $actual = $solution->maxSubArray($input);
        $this->assertEquals($expected, $actual);
    }
}
