<?php

namespace leetcode\g0101_0200\s0160_intersection_of_two_linked_lists;

use leetcode\com_github_leetcode\ListNode;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testGetIntersectionNode() {
        $intersectionListNode = new ListNode(8, new ListNode(4, new ListNode(5)));
        $nodeA = new ListNode(4, new ListNode(1, $intersectionListNode));
        $nodeB = new ListNode(5, new ListNode(6, new ListNode(1, $intersectionListNode)));
        $this->assertEquals((new Solution())->getIntersectionNode($nodeA, $nodeB)->val, 8);
    }

    public function testGetIntersectionNode2() {
        $nodeA = new ListNode(4, new ListNode(1, new ListNode(2)));
        $nodeB = new ListNode(5, new ListNode(6, new ListNode(1, new ListNode(2))));
        $this->assertEquals((new Solution())->getIntersectionNode($nodeA, $nodeB), NULL);
    }
}
