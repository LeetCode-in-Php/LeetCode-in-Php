<?php

namespace leetcode\g0301_0400\s0394_decode_string;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testDecodeString() {
        $this->assertEquals("aaabcbc", (new Solution())->decodeString("3[a]2[bc]"));
    }

    public function testDecodeString2() {
        $this->assertEquals("accaccacc", (new Solution())->decodeString("3[a2[c]]"));
    }

    public function testDecodeString3() {
        $this->assertEquals("abcabccdcdcdef", (new Solution())->decodeString("2[abc]3[cd]ef"));
    }

    public function testDecodeString4() {
        $this->assertEquals("abccdcdcdxyz", (new Solution())->decodeString("abc3[cd]xyz"));
    }
}
