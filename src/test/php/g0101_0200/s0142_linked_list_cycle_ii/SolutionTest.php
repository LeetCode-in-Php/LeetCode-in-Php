<?php

namespace leetcode\g0101_0200\s0142_linked_list_cycle_ii;

use leetcode\com_github_leetcode\ListNode;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testDetectCycle() {
        $listNode1 = new ListNode(3);
        $listNode1->next = new ListNode(2);
        $listNode1->next->next = new ListNode(0);
        $listNode1->next->next->next = new ListNode(-4);
        $listNode1->next->next->next->next = $listNode1->next;
        $this->assertEquals(true, (new Solution())->detectCycle($listNode1) == $listNode1->next);
    }

    public function testDetectCycle2() {
        $listNode1 = new ListNode(1);
        $listNode1->next = new ListNode(2);
        $listNode1->next->next = $listNode1;
        $this->assertEquals(true, (new Solution())->detectCycle($listNode1) == $listNode1);
    }

    public function testDetectCycle3() {
        $listNode1 = new ListNode(1);
        $this->assertEquals(null, (new Solution())->detectCycle($listNode1));
    }
}
