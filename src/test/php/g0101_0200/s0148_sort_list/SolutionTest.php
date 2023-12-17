<?php

namespace leetcode\g0101_0200\s0148_sort_list;

use leetcode\com_github_leetcode\ListNode;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testSortList() {
        $listNode1 = new ListNode(4);
        $listNode1->next = new ListNode(2);
        $listNode1->next->next = new ListNode(1);
        $listNode1->next->next->next = new ListNode(3);
        $this->assertEquals((new Solution())->sortList($listNode1)->toString(), "1, 2, 3, 4");
    }

    public function testSortList2() {
        $listNode1 = new ListNode(-1);
        $listNode1->next = new ListNode(5);
        $listNode1->next->next = new ListNode(3);
        $listNode1->next->next->next = new ListNode(4);
        $listNode1->next->next->next->next = new ListNode(0);
        $this->assertEquals((new Solution())->sortList($listNode1)->toString(), "-1, 0, 3, 4, 5");
    }

    public function testSortList3() {
        $this->assertEquals((new Solution())->sortList(NULL), NULL);
    }
}
