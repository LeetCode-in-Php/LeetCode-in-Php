<?php

namespace leetcode\g0101_0200\s0121_best_time_to_buy_and_sell_stock;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testMaxProfit() {
        $this->assertEquals(5, (new Solution())->maxProfit(array(7, 1, 5, 3, 6, 4)));
    }

    public function testMaxProfit2() {
        $this->assertEquals(0, (new Solution())->maxProfit(array(7, 6, 4, 3, 1)));
    }
}
