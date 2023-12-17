<?php

namespace leetcode\g0101_0200\s0139_word_break;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testWordBreak() {
        $this->assertEquals((new Solution())->wordBreak("leetcode", array("leet", "code")), true);
    }

    public function testWordBreak2() {
        $this->assertEquals((new Solution())->wordBreak("applepenapple", array("apple", "pen")), true);
    }

    public function testWordBreak3() {
        $this->assertEquals((new Solution())->wordBreak("catsandog", array("cats", "dog", "sand", "and", "cat")), false);
    }
}
