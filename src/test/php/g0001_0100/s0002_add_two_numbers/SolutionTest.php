<?php

namespace leetcode\g0001_0100\s0002_add_two_numbers;

use PHPUnit\Framework\TestCase;
use leetcode\com_github_leetcode\ListNode;
use leetcode\tests\com_github_leetcode\LinkedListUtils;

class SolutionTest extends TestCase {
    public function testAddTwoNumbers() {
        $listNode1 = LinkedListUtils::constructLinkedList([2, 4, 3]);
        $listNode2 = LinkedListUtils::constructLinkedList([5, 6, 4]);
        $this->assertThat(
            (new Solution())->addTwoNumbers($listNode1, $listNode2)->toString(),
            $this->equalTo("7, 0, 8")
        );
    }

    public function testAddTwoNumbers2() {
        $this->assertThat(
            (new Solution())->addTwoNumbers(new ListNode(0), new ListNode(0))->toString(),
            $this->equalTo("0")
        );
    }

    public function testAddTwoNumbers3() {
        $listNode1 = LinkedListUtils::constructLinkedList([9, 9, 9, 9, 9, 9, 9]);
        $listNode2 = LinkedListUtils::constructLinkedList([9, 9, 9, 9]);
        $this->assertThat(
            (new Solution())->addTwoNumbers($listNode1, $listNode2)->toString(),
            $this->equalTo("8, 9, 9, 9, 0, 0, 0, 1")
        );
    }
}
