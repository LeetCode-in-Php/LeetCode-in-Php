<?php

namespace leetcode\g0301_0400\s0338_counting_bits;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testCountBits() {
        $this->assertEquals(array(0, 1, 1), (new Solution())->countBits(2));
    }

    public function testCountBits2() {
        $this->assertEquals(array(0, 1, 1, 2, 1, 2), (new Solution())->countBits(5));
    }
}
