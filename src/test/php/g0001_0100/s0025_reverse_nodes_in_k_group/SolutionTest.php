<?php

namespace leetcode\g0001_0100\s0025_reverse_nodes_in_k_group;

use PHPUnit\Framework\TestCase;
use com_github_leetcode\LinkedListUtils;
use com_github_leetcode\ListNode;

class SolutionTest extends TestCase
{
    public function testReverseKGroup()
    {
        $head = LinkedListUtils::constructLinkedList([1, 2, 3, 4, 5]);
        $this->assertEquals("2, 1, 4, 3, 5", (string) new Solution()->reverseKGroup($head, 2));
    }

    public function testReverseKGroup2()
    {
        $head = LinkedListUtils::constructLinkedList([1, 2, 3, 4, 5]);
        $this->assertEquals("3, 2, 1, 4, 5", (string) new Solution()->reverseKGroup($head, 3));
    }
}
