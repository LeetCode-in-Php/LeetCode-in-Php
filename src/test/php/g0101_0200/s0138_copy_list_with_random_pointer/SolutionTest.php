<?php

namespace leetcode\g0101_0200\s0138_copy_list_with_random_pointer;

use leetcode\com_github_leetcode\random\Node;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testCopyRandomList() {
        $node7 = new Node(7);
        $node13 = new Node(13);
        $node11 = new Node(11);
        $node10 = new Node(10);
        $node1 = new Node(1);
        $node7->next = $node13;
        $node13->next = $node11;
        $node11->next = $node10;
        $node10->next = $node1;
        $node1->next = null;
        $node7->random = null;
        $node13->random = $node7;
        $node11->random = $node1;
        $node10->random = $node11;
        $node1->random = $node7;
        $this->assertEquals("[[7,null],[13,0],[11,4],[10,2],[1,0]]", (new Solution())->copyRandomList($node7));
    }

    public function testCopyRandomList2() {
        $node1 = new Node(1);
        $node2 = new Node(2);
        $node1->next = $node2;
        $node1->random = $node1;
        $node2->next = null;
        $node2->random = $node2;
        $this->assertEquals("[[1,1],[2,1]]", (new Solution())->copyRandomList($node1));
    }

    public function testCopyRandomList3() {
        $node31 = new Node(3);
        $node32 = new Node(3);
        $node33 = new Node(3);
        $node31->next = $node32;
        $node31->random = null;
        $node32->next = $node33;
        $node32->random = $node31;
        $node33->next = null;
        $node33->random = null;
        $this->assertEquals("[[3,null],[3,0],[3,null]]", (new Solution())->copyRandomList($node31));
    }
}
