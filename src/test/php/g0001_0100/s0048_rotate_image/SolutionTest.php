<?php

namespace leetcode\g0001_0100\s0048_rotate_image;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testRotate() {
        $expected = array(array(7, 4, 1), array(8, 5, 2), array(9, 6, 3));
        $input = array(array(1, 2, 3), array(4, 5, 6), array(7, 8, 9));
        $solution = new Solution();
        $solution->rotate($input);
        $this->assertEquals($expected, $input);
    }

    public function testRotate2() {
        $expected = array(array(15, 13, 2, 5), array(14, 3, 4, 1), array(12, 6, 8, 9), array(16, 7, 10, 11));
        $input = array(array(5, 1, 9, 11), array(2, 4, 8, 10), array(13, 3, 6, 7), array(15, 14, 12, 16));
        $solution = new Solution();
        $solution->rotate($input);
        $this->assertEquals($expected, $input);
    }
}
