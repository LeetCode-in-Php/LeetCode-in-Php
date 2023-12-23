<?php

namespace leetcode\g0201_0300\s0300_longest_increasing_subsequence;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testLengthOfLIS() {
        $this->assertEquals(4, (new Solution())->lengthOfLIS(array(10, 9, 2, 5, 3, 7, 101, 18)));
    }

    public function testLengthOfLIS2() {
        $this->assertEquals(4, (new Solution())->lengthOfLIS(array(0, 1, 0, 3, 2, 3)));
    }

    public function testLengthOfLIS3() {
        $this->assertEquals(1, (new Solution())->lengthOfLIS(array(7, 7, 7, 7, 7, 7, 7)));
    }
}
