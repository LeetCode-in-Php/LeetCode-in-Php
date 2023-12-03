<?php

namespace leetcode\g0001_0100\s0009_palindrome_number;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testIsPalindrome() {
        $this->assertTrue((new Solution())->isPalindrome(121));
    }

    public function testIsPalindrome2() {
        $this->assertFalse((new Solution())->isPalindrome(-121));
    }

    public function testIsPalindrome3() {
        $this->assertFalse((new Solution())->isPalindrome(10));
    }
}
