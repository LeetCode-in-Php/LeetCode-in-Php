<?php

namespace leetcode\g0101_0200\s0136_single_number;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testSingleNumber() {
        $this->assertEquals(1, (new Solution())->singleNumber(array(2, 2, 1)));
    }

    public function testSingleNumber2() {
        $this->assertEquals(4, (new Solution())->singleNumber(array(4, 1, 2, 1, 2)));
    }

    public function testSingleNumber3() {
        $this->assertEquals(1, (new Solution())->singleNumber(array(1)));
    }
}
