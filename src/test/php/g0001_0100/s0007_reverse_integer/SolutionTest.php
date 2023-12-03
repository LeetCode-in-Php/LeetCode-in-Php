<?php

namespace leetcode\g0001_0100\s0007_reverse_integer;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testReverse() {
        $this->assertEquals(321, (new Solution())->reverse(123));
    }

    public function testReverse2() {
        $this->assertEquals(-321, (new Solution())->reverse(-123));
    }

    public function testReverse3() {
        $this->assertEquals(21, (new Solution())->reverse(120));
    }
}
