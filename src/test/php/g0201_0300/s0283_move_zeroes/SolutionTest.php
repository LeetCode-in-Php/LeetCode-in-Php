<?php

namespace leetcode\g0201_0300\s0283_move_zeroes;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testMoveZeroes() {
        $array = array(0, 1, 0, 3, 12);
        (new Solution())->moveZeroes($array);
        $this->assertEquals(array(1, 3, 12, 0, 0), $array);
    }

    public function testMoveZeroes2() {
        $array = array(0);
        (new Solution())->moveZeroes($array);
        $this->assertEquals(array(0), $array);
    }
}
