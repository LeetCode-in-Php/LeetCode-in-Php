<?php

namespace leetcode\g0001_0100\s0024_swap_nodes_in_pairs;

use com_github_leetcode\LinkedListUtils;
use com_github_leetcode\ListNode;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testSwapPairs() {
        $head = LinkedListUtils::createSinglyLinkedList([1, 2, 3, 4]);
        $this->assertEquals('2, 1, 4, 3', (string)new Solution()->swapPairs($head));
    }

    public function testSwapPairs2() {
        $this->assertEquals('1', (string)new Solution()->swapPairs(new ListNode(1)));
    }
}
