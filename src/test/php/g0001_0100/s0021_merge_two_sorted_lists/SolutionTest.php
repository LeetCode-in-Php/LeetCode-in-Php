<?php

namespace leetcode\g0001_0100\s0021_merge_two_sorted_lists;

use leetcode\com_github_leetcode\LinkedListUtils;
use leetcode\com_github_leetcode\ListNode;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testMergeTwoLists() {
        $l1 = LinkedListUtils::createSinglyLinkedList([1, 2, 4]);
        $l2 = LinkedListUtils::createSinglyLinkedList([1, 3, 4]);
        $this->assertEquals('1, 1, 2, 3, 4, 4', (new Solution())->mergeTwoLists($l1, $l2)->toString());
    }

    public function testMergeTwoLists2() {
        $this->assertEquals('0, 0', (new Solution())->mergeTwoLists(new ListNode(), new ListNode())->toString());
    }
}
