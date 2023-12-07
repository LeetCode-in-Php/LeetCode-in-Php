<?php

namespace leetcode\g0001_0100\s0020_valid_parentheses;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testDecode() {
        $this->assertEquals("", (new Solution())->decode(""));
    }
}
