<?php

namespace leetcode\g0001_0100\s0019_remove_nth_node_from_end_of_list;

use leetcode\com_github_leetcode\LinkedListUtils;
use leetcode\com_github_leetcode\ListNode;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testRemoveNthFromEnd() {
        $node1 = LinkedListUtils::constructLinkedList([1, 2, 3, 4, 5]);
        $expected = LinkedListUtils::constructLinkedList([1, 2, 3, 5]);
        $this->assertEquals($expected, (new Solution())->removeNthFromEnd($node1, 2));
    }

    public function testRemoveNthFromEnd2() {
        $node1 = new ListNode(1);
        $expected = null;
        $this->assertEquals($expected, (new Solution())->removeNthFromEnd($node1, 1));
    }
}
