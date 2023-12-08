<?php

namespace leetcode\g0001_0100\s0022_generate_parentheses;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testGenerateParenthesis() {
        $this->assertEquals(['((()))', '(()())', '(())()', '()(())', '()()()'],
            (new Solution())->generateParenthesis(3));
    }

    public function testGenerateParenthesis2() {
        $this->assertEquals(['()'], (new Solution())->generateParenthesis(1));
    }
}
