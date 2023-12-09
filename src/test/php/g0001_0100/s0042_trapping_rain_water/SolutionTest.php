<?php

namespace leetcode\g0001_0100\s0042_trapping_rain_water;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testTrap() {
        $this->assertEquals(6, (new Solution())->trap(array(0, 1, 0, 2, 1, 0, 1, 3, 2, 1, 2, 1)));
    }

    public function testTrap2() {
        $this->assertEquals(9, (new Solution())->trap(array(4, 2, 0, 3, 2, 5)));
    }
}
