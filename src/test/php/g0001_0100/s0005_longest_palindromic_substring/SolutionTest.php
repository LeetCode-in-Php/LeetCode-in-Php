<?php

namespace leetcode\g0001_0100\s0005_longest_palindromic_substring;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testLongestPalindrome() {
        $this->assertEquals("aba", (new Solution())->longestPalindrome("babad"));
    }

    public function testLongestPalindrome2() {
        $this->assertEquals("bb", (new Solution())->longestPalindrome("cbbd"));
    }
}
