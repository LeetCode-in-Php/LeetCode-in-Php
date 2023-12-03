<?php

namespace leetcode\g0001_0100\s0003_longest_substring_without_repeating_characters;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testLengthOfLongestSubstring() {
        $this->assertEquals(3, (new Solution())->lengthOfLongestSubstring("abcabcbb"));
    }

    public function testLengthOfLongestSubstring2() {
        $this->assertEquals(1, (new Solution())->lengthOfLongestSubstring("bbbbb"));
    }

    public function testLengthOfLongestSubstring3() {
        $this->assertEquals(3, (new Solution())->lengthOfLongestSubstring("pwwkew"));
    }
}
