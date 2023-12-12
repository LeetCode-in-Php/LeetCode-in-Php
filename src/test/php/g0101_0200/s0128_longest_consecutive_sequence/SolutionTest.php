<?php

namespace leetcode\g0101_0200\s0128_longest_consecutive_sequence;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testLongestConsecutive() {
        $this->assertEquals(4, (new Solution())->longestConsecutive(array(100, 4, 200, 1, 3, 2)));
    }

    public function testLongestConsecutive2() {
        $this->assertEquals(9, (new Solution())->longestConsecutive(array(0, 3, 7, 2, 5, 8, 4, 6, 0, 1)));
    }
}
