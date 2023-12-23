<?php

namespace leetcode\g0201_0300\s0234_palindrome_linked_list;

use leetcode\com_github_leetcode\ListNode;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testIsPalindrome() {
        $headActual = new ListNode(1);
        $headActual->next = new ListNode(2);
        $headActual->next->next = new ListNode(2);
        $headActual->next->next->next = new ListNode(1);
        $this->assertEquals(true, (new Solution())->isPalindrome($headActual));
    }

    public function testIsPalindrome2() {
        $headActual = new ListNode(1);
        $headActual->next = new ListNode(2);
        $this->assertEquals(false, (new Solution())->isPalindrome($headActual));
    }
}
