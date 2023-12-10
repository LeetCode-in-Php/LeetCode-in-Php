<?php

namespace leetcode\g0001_0100\s0076_minimum_window_substring;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testMinWindow() {
        $solution = new Solution();
        $this->assertEquals("BANC", $solution->minWindow("ADOBECODEBANC", "ABC"));
    }

    public function testMinWindow2() {
        $solution = new Solution();
        $this->assertEquals("a", $solution->minWindow("a", "a"));
    }

    public function testMinWindow3() {
        $solution = new Solution();
        $this->assertEquals("", $solution->minWindow("a", "aa"));
    }
}
