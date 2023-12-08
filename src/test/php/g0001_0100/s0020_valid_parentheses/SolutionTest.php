<?php

namespace leetcode\g0001_0100\s0020_valid_parentheses;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testIsValid() {
        $this->assertTrue((new Solution())->isValid("()"));
    }

    public function testIsValid2() {
        $this->assertTrue((new Solution())->isValid("()[]{}"));
    }

    public function testIsValid3() {
        $this->assertFalse((new Solution())->isValid("(]"));
    }

    public function testIsValid4() {
        $this->assertFalse((new Solution())->isValid("([)]"));
    }

    public function testIsValid5() {
        $this->assertTrue((new Solution())->isValid("{[]}"));
    }
}
