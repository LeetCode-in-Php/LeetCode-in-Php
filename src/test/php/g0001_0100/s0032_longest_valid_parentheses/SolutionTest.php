<?php

namespace leetcode\g0001_0100\s0032_longest_valid_parentheses;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testLongestValidParentheses() {
        $this->assertEquals(2, (new Solution())->longestValidParentheses("(()"));
    }

    public function testLongestValidParentheses2() {
        $this->assertEquals(4, (new Solution())->longestValidParentheses(")()())"));
    }

    public function testLongestValidParentheses3() {
        $this->assertEquals(0, (new Solution())->longestValidParentheses(""));
    }
}
