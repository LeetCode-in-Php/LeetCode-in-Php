<?php

namespace leetcode\g0401_0500\s0438_find_all_anagrams_in_a_string;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testFindAnagrams() {
        $this->assertEquals(array(0, 6), (new Solution())->findAnagrams("cbaebabacd", "abc"));
    }

    public function testFindAnagrams2() {
        $this->assertEquals(array(0, 1, 2), (new Solution())->findAnagrams("abab", "ab"));
    }
}
