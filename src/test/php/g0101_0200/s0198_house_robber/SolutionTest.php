<?php

namespace leetcode\g0101_0200\s0198_house_robber;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testRob() {
        $this->assertEquals(4, (new Solution())->rob(array(1, 2, 3, 1)));
    }

    public function testRob2() {
        $this->assertEquals(12, (new Solution())->rob(array(2, 7, 9, 3, 1)));
    }
}
