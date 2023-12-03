<?php

namespace leetcode\g0001_0100\s0006_zigzag_conversion;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testConvert() {
        $this->assertEquals("PAHNAPLSIIGYIR", (new Solution())->convert("PAYPALISHIRING", 3));
    }

    public function testConvert2() {
        $this->assertEquals("PINALSIGYAHRPI", (new Solution())->convert("PAYPALISHIRING", 4));
    }
}
