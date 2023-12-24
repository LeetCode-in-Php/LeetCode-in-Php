<?php

namespace leetcode\g0701_0800\s0739_daily_temperatures;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testDailyTemperatures() {
        $this->assertEquals(
            array(1, 1, 4, 2, 1, 1, 0, 0),
            (new Solution())->dailyTemperatures(array(73, 74, 75, 71, 69, 72, 76, 73))
        );
    }

    public function testDailyTemperatures2() {
        $this->assertEquals(
            array(1, 1, 1, 0),
            (new Solution())->dailyTemperatures(array(30, 40, 50, 60))
        );
    }

    public function testDailyTemperatures3() {
        $this->assertEquals(
            array(1, 1, 0),
            (new Solution())->dailyTemperatures(array(30, 60, 90))
        );
    }
}
