<?php

namespace leetcode\g1101_1200\s1143_longest_common_subsequence;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testLongestCommonSubsequence() {
        $this->assertEquals(
            3,
            (new Solution())->longestCommonSubsequence("abcde", "ace")
        );
    }

    public function testLongestCommonSubsequence2() {
        $this->assertEquals(
            3,
            (new Solution())->longestCommonSubsequence("abc", "abc")
        );
    }

    public function testLongestCommonSubsequence3() {
        $this->assertEquals(
            0,
            (new Solution())->longestCommonSubsequence("abc", "def")
        );
    }
}
