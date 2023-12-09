<?php

namespace leetcode\g0001_0100\s0041_first_missing_positive;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testFirstMissingPositive() {
        $this->assertEquals(3, (new Solution())->firstMissingPositive(array(1, 2, 0)));
    }

    public function testFirstMissingPositive2() {
        $this->assertEquals(2, (new Solution())->firstMissingPositive(array(3, 4, -1, 1)));
    }

    public function testFirstMissingPositive3() {
        $this->assertEquals(1, (new Solution())->firstMissingPositive(array(7, 8, 9, 11, 12)));
    }
}
