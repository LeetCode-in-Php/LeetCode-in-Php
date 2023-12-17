<?php

namespace leetcode\g0101_0200\s0139_word_break;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testWordBreak() {
        $this->assertEquals(true, (new Solution())->wordBreak("leetcode", array("leet", "code")));
    }

    public function testWordBreak2() {
        $this->assertEquals(true, (new Solution())->wordBreak("applepenapple", array("apple", "pen")));
    }

    public function testWordBreak3() {
        $this->assertEquals(false,
            (new Solution())->wordBreak("catsandog", array("cats", "dog", "sand", "and", "cat")));
    }
}
