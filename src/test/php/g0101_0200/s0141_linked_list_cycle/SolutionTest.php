<?php

namespace leetcode\g0101_0200\s0141_linked_list_cycle;

use PHPUnit\Framework\TestCase;
use leetcode\com_github_leetcode\ListNode;

class SolutionTest extends TestCase {
    public function testHasCycle() {
        $listNode1 = new ListNode(3);
        $listNode1->next = new ListNode(2);
        $listNode1->next->next = new ListNode(0);
        $listNode1->next->next->next = new ListNode(-4);
        $listNode1->next->next->next->next = $listNode1->next;
        $this->assertEquals((new Solution())->hasCycle($listNode1), true);
    }

    public function testHasCycle2() {
        $listNode1 = new ListNode(1);
        $listNode1->next = new ListNode(2);
        $listNode1->next->next = $listNode1;
        $this->assertEquals((new Solution())->hasCycle($listNode1), true);
    }

    public function testHasCycle3() {
        $listNode1 = new ListNode(1);
        $this->assertEquals((new Solution())->hasCycle($listNode1), false);
    }
}
