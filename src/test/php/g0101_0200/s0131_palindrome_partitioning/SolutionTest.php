<?php

namespace leetcode\g0101_0200\s0131_palindrome_partitioning;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testPartition() {
        $this->assertEquals(array(array("a", "a", "b"), array("aa", "b")), (new Solution())->partition("aab"));
    }

    public function testPartition2() {
        $this->assertEquals(array(array("a")), (new Solution())->partition("a"));
    }
}
