<?php

namespace leetcode\g0001_0100\s0010_regular_expression_matching;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testIsMatch() {
        $this->assertFalse((new Solution())->isMatch("aa", "a"));
    }

    public function testIsMatch2() {
        $this->assertTrue((new Solution())->isMatch("aa", "a*"));
    }

    public function testIsMatch3() {
        $this->assertTrue((new Solution())->isMatch("ab", ".*"));
    }

    public function testIsMatch4() {
        $this->assertTrue((new Solution())->isMatch("aab", "c*a*b"));
    }

    public function testIsMatch5() {
        $this->assertFalse((new Solution())->isMatch("mississippi", "mis*is*p*."));
    }
}
