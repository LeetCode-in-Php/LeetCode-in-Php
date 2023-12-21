<?php

namespace leetcode\g0101_0200\s0189_rotate_array;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testRotate() {
        $array = array(1, 2, 3, 4, 5, 6, 7);
        (new Solution())->rotate($array, 3);
        $this->assertEquals(array(5, 6, 7, 1, 2, 3, 4), $array);
    }

    public function testRotate2() {
        $array = array(-1, -100, 3, 99);
        (new Solution())->rotate($array, 2);
        $this->assertEquals(array(3, 99, -1, -100), $array);
    }
}
