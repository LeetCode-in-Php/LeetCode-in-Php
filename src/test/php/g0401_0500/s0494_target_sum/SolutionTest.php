<?php

namespace leetcode\g0401_0500\s0494_target_sum;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testFindTargetSumWays() {
        $this->assertEquals(5, (new Solution())->findTargetSumWays(array(1, 1, 1, 1, 1), 3));
    }

    public function testFindTargetSumWays2() {
        $this->assertEquals(1, (new Solution())->findTargetSumWays(array(1), 1));
    }
}
