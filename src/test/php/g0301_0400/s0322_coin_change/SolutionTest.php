<?php

namespace leetcode\g0301_0400\s0322_coin_change;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testCoinChange() {
        $this->assertEquals(3, (new Solution())->coinChange(array(1, 2, 5), 11));
    }

    public function testCoinChange2() {
        $this->assertEquals(-1, (new Solution())->coinChange(array(2), 3));
    }

    public function testCoinChange3() {
        $this->assertEquals(0, (new Solution())->coinChange(array(1), 0));
    }
}
