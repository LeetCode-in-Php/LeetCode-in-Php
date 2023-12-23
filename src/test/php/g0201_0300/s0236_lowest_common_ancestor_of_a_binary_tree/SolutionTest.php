<?php

namespace leetcode\g0201_0300\s0236_lowest_common_ancestor_of_a_binary_tree;

use leetcode\com_github_leetcode\TreeNode;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testLowestCommonAncestor() {
        $leftNodeLeftNode = new TreeNode(6);
        $leftNodeRightNode = new TreeNode(2, new TreeNode(7), new TreeNode(4));
        $leftNode = new TreeNode(5, $leftNodeLeftNode, $leftNodeRightNode);
        $rightNode = new TreeNode(1, new TreeNode(0), new TreeNode(8));
        $root = new TreeNode(3, $leftNode, $rightNode);
        $this->assertEquals(3, (new Solution())->lowestCommonAncestor($root, new TreeNode(5), new TreeNode(1))->val);
    }

    public function testLowestCommonAncestor2() {
        $leftNodeLeftNode = new TreeNode(6);
        $leftNodeRightNode = new TreeNode(2, new TreeNode(7), new TreeNode(4));
        $leftNode = new TreeNode(5, $leftNodeLeftNode, $leftNodeRightNode);
        $rightNode = new TreeNode(1, new TreeNode(0), new TreeNode(8));
        $root = new TreeNode(3, $leftNode, $rightNode);
        $this->assertEquals(5, (new Solution())->lowestCommonAncestor($root, new TreeNode(5), new TreeNode(4))->val);
    }

    public function testLowestCommonAncestor3() {
        $this->assertEquals(2, (new Solution())->lowestCommonAncestor(new TreeNode(2, new TreeNode(1), null), new TreeNode(2), new TreeNode(1))->val);
    }
}
