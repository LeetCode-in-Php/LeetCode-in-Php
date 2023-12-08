<?php

namespace leetcode\g0001_0100\s0024_swap_nodes_in_pairs;

use leetcode\com_github_leetcode\ListNode;
use leetcode\com_github_leetcode\LinkedListUtils;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testSwapPairs() {
        $head = LinkedListUtils::createSinglyLinkedList([1, 2, 3, 4]);
        $this->assertEquals('2, 1, 4, 3', (new Solution())->swapPairs($head));
    }

    public function testSwapPairs2() {
        $this->assertEquals('1', (new Solution())->swapPairs(new ListNode(1)));
    }
}
