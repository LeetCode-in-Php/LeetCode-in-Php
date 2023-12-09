<?php

namespace leetcode\g0001_0100\s0039_combination_sum;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testCombinationSum() {
        $this->assertEquals(
            array(array(7), array(3, 2, 2)),
            (new Solution())->combinationSum(array(2, 3, 6, 7), 7)
        );
    }

    public function testCombinationSum2() {
        $this->assertEquals(
            array(array(5, 3), array(3, 3, 2), array(2, 2, 2, 2)),
            (new Solution())->combinationSum(array(2, 3, 5), 8)
        );
    }

    public function testCombinationSum3() {
        $this->assertEquals(
            array(),
            (new Solution())->combinationSum(array(2), 1)
        );
    }
}
