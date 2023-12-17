<?php

namespace leetcode\g0101_0200\s0141_linked_list_cycle;

use leetcode\com_github_leetcode\ListNode;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testHasCycle() {
        $listNode1 = new ListNode(3);
        $listNode1->next = new ListNode(2);
        $listNode1->next->next = new ListNode(0);
        $listNode1->next->next->next = new ListNode(-4);
        $listNode1->next->next->next->next = $listNode1->next;
        $this->assertEquals(true, (new Solution())->hasCycle($listNode1));
    }

    public function testHasCycle2() {
        $listNode1 = new ListNode(1);
        $listNode1->next = new ListNode(2);
        $listNode1->next->next = $listNode1;
        $this->assertEquals(true, (new Solution())->hasCycle($listNode1));
    }

    public function testHasCycle3() {
        $listNode1 = new ListNode(1);
        $this->assertEquals(false, (new Solution())->hasCycle($listNode1));
    }
}
