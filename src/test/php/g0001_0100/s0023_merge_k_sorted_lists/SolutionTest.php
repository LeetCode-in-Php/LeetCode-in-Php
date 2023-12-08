<?php

namespace leetcode\g0001_0100\s0023_merge_k_sorted_lists;

use leetcode\com_github_leetcode\LinkedListUtils;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testMergeKLists() {
        $head1 = LinkedListUtils::createSinglyLinkedList([1, 4, 5]);
        $head2 = LinkedListUtils::createSinglyLinkedList([1, 3, 4]);
        $head3 = LinkedListUtils::createSinglyLinkedList([2, 6]);
        $this->assertEquals(
            '1, 1, 2, 3, 4, 4, 5, 6',
            (new Solution())->mergeKLists([$head1, $head2, $head3])->toString()
        );
    }

    public function testMergeKLists2() {
        $head1 = LinkedListUtils::createSinglyLinkedList([1, 3, 5, 7, 11]);
        $head2 = LinkedListUtils::createSinglyLinkedList([2, 8, 12]);
        $head3 = LinkedListUtils::createSinglyLinkedList([4, 6, 9, 10]);
        $this->assertEquals(
            '1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12',
            (new Solution())->mergeKLists([$head1, $head2, $head3])->toString()
        );
    }
}
