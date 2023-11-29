<?php

namespace leetcode\g0001_0100\s0002_add_two_numbers;

use PHPUnit\Framework\TestCase;
use leetcode\com_github_leetcode\LinkedListUtils;
use leetcode\com_github_leetcode\ListNode;

class SolutionTest {
    public function testAddTwoNumbers() {
        $listNode1 = LinkedListUtils::constructLinkedList([2, 4, 3]);
        $listNode2 = LinkedListUtils::constructLinkedList([5, 6, 4]);
        assertThat(
            (new Solution())->addTwoNumbers($listNode1, $listNode2)->toString(),
            equalTo("7, 0, 8")
        );
    }

    public function testAddTwoNumbers2() {
        assertThat(
            (new Solution())->addTwoNumbers(new ListNode(0), new ListNode(0))->toString(),
            equalTo("0")
        );
    }

    public function testAddTwoNumbers3() {
        $listNode1 = LinkedListUtils::constructLinkedList([9, 9, 9, 9, 9, 9, 9]);
        $listNode2 = LinkedListUtils::constructLinkedList([9, 9, 9, 9]);
        assertThat(
            (new Solution())->addTwoNumbers($listNode1, $listNode2)->toString(),
            equalTo("8, 9, 9, 9, 0, 0, 0, 1")
        );
    }
}
