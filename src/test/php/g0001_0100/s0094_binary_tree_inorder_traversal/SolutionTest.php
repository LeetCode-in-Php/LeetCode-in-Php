<?php

namespace leetcode\g0001_0100\s0094_binary_tree_inorder_traversal;

use leetcode\com_github_leetcode\TreeNode;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testInorderTraversal() {
        $treeNode = new TreeNode(1);
        $treeNode2 = new TreeNode(2);
        $treeNode->right = $treeNode2;
        $treeNode2->left = new TreeNode(3);
        $solution = new Solution();
        $this->assertEquals("[1,3,2]", json_encode($solution->inorderTraversal($treeNode)));
    }

    public function testInorderTraversal2() {
        $solution = new Solution();
        $this->assertEquals("[]", json_encode($solution->inorderTraversal(null)));
    }

    public function testInorderTraversal3() {
        $solution = new Solution();
        $this->assertEquals("[1]", json_encode($solution->inorderTraversal(new TreeNode(1))));
    }
}
