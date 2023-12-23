<?php

namespace leetcode\g0201_0300\s0230_kth_smallest_element_in_a_bst;

use leetcode\com_github_leetcode\TreeNode;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testKthSmallest() {
        $root = TreeNode::create(array(3, 1, 4, null, 2));
        $this->assertEquals(1, (new Solution())->kthSmallest($root, 1));
    }

    public function testKthSmallest2() {
        $root = TreeNode::create(array(5, 3, 6, 2, 4, null, null, 1));
        $this->assertEquals(3, (new Solution())->kthSmallest($root, 3));
    }
}
