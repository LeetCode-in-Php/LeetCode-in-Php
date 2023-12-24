<?php

namespace leetcode\g0601_0700\s0647_palindromic_substrings;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testCountSubstrings() {
        $this->assertEquals(3, (new Solution())->countSubstrings("abc"));
    }

    public function testCountSubstrings2() {
        $this->assertEquals(6, (new Solution())->countSubstrings("aaa"));
    }
}
