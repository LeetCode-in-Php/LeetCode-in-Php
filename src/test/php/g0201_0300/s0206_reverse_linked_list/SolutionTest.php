<?php

namespace leetcode\g0201_0300\s0206_reverse_linked_list;

use PHPUnit\Framework\TestCase;
use leetcode\com_github_leetcode\ListNode;

class SolutionTest extends TestCase {
    public function testReverseList() {
        $headActual = new ListNode(1);
        $headActual->next = new ListNode(2);
        $headActual->next->next = new ListNode(3);
        $headActual->next->next->next = new ListNode(4);
        $headActual->next->next->next->next = new ListNode(5);
        $this->assertEquals("5, 4, 3, 2, 1", (new Solution())->reverseList($headActual)->toString());
    }

    public function testReverseList2() {
        $headActual = new ListNode(1);
        $headActual->next = new ListNode(2);
        $this->assertEquals("2, 1", (new Solution())->reverseList($headActual)->toString());
    }

    public function testReverseList3() {
        $this->assertEquals(null, (new Solution())->reverseList(null));
    }
}
