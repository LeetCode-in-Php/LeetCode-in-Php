<?php

namespace leetcode\g0101_0200\s0124_binary_tree_maximum_path_sum;

use PHPUnit\Framework\TestCase;
use leetcode\com_github_leetcode\TreeNode;

class SolutionTest extends TestCase {
    public function testMaxPathSum() {
        $treeNode = TreeNode::create(array(1, 2, 3));
        $this->assertEquals(6, (new Solution())->maxPathSum($treeNode));
    }

    public function testMaxPathSum2() {
        $treeNode = TreeNode::create(array(-10, 9, 20, null, null, 15, 7));
        $this->assertEquals(42, (new Solution())->maxPathSum($treeNode));
    }
}
