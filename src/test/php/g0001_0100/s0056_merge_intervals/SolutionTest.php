<?php

namespace leetcode\g0001_0100\s0056_merge_intervals;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testMerge() {
        $expected = array(array(1, 6), array(8, 10), array(15, 18));
        $input = array(array(1, 3), array(2, 6), array(8, 10), array(15, 18));
        $solution = new Solution();
        $actual = $solution->merge($input);
        $this->assertEquals($expected, $actual);
    }

    public function testMerge2() {
        $expected = array(array(1, 5));
        $input = array(array(1, 4), array(4, 5));
        $solution = new Solution();
        $actual = $solution->merge($input);
        $this->assertEquals($expected, $actual);
    }
}
