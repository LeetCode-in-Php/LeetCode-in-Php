<?php

namespace leetcode\g0201_0300\s0239_sliding_window_maximum;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testMaxSlidingWindow() {
        $this->assertEquals(array(3, 3, 5, 5, 6, 7), (new Solution())->maxSlidingWindow(
            array(1, 3, -1, -3, 5, 3, 6, 7), 3));
    }

    public function testMaxSlidingWindow2() {
        $this->assertEquals(array(1), (new Solution())->maxSlidingWindow(array(1), 1));
    }
}
