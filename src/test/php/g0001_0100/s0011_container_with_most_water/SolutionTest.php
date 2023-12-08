<?php

namespace leetcode\g0001_0100\s0011_container_with_most_water;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testMaxArea() {
        $this->assertSame(49, (new Solution())->maxArea([1, 8, 6, 2, 5, 4, 8, 3, 7]));
    }

    public function testMaxArea2() {
        $this->assertSame(1, (new Solution())->maxArea([1, 1]));
    }
}
