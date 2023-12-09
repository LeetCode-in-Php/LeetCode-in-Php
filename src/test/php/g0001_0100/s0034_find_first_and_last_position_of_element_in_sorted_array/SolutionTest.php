<?php

namespace leetcode\g0001_0100\s0034_find_first_and_last_position_of_element_in_sorted_array;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testSearchRange() {
        $expected = array(3, 4);
        $actual = (new Solution())->searchRange(array(5, 7, 7, 8, 8, 10), 8);
        $this->assertEquals($expected, $actual);
    }

    public function testSearchRange2() {
        $expected = array(-1, -1);
        $actual = (new Solution())->searchRange(array(5, 7, 7, 8, 8, 10), 6);
        $this->assertEquals($expected, $actual);
    }

    public function testSearchRange3() {
        $expected = array(-1, -1);
        $actual = (new Solution())->searchRange(array(), 0);
        $this->assertEquals($expected, $actual);
    }
}
