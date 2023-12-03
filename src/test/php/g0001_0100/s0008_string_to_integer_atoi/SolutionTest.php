<?php

namespace leetcode\g0001_0100\s0008_string_to_integer_atoi;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testMyAtoi() {
        $this->assertEquals(42, (new Solution())->myAtoi("42"));
    }

    public function testMyAtoi2() {
        $this->assertEquals(-42, (new Solution())->myAtoi("   -42"));
    }

    public function testMyAtoi3() {
        $this->assertEquals(4193, (new Solution())->myAtoi("4193 with words"));
    }

    public function testMyAtoi4() {
        $this->assertEquals(0, (new Solution())->myAtoi("words and 987"));
    }

    public function testMyAtoi5() {
        $this->assertEquals(-2147483648, (new Solution())->myAtoi("-91283472332"));
    }
}
