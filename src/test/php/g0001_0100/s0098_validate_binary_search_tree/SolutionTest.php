<?php

namespace leetcode\g0001_0100\s0098_validate_binary_search_tree;

use leetcode\com_github_leetcode\TreeNode;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testIsValidBST() {
        $treeNode1 = new TreeNode(2);
        $treeNode1->left = new TreeNode(1);
        $treeNode1->right = new TreeNode(3);
        $solution = new Solution();
        $this->assertEquals(true, $solution->isValidBST($treeNode1));
    }

    public function testIsValidBST2() {
        $treeNode = new TreeNode(5);
        $treeNode->left = new TreeNode(1);
        $treeNode->right = new TreeNode(4);
        $treeNode->right->left = new TreeNode(3);
        $treeNode->right->right = new TreeNode(6);
        $solution = new Solution();
        $this->assertEquals(false, $solution->isValidBST($treeNode));
    }
}
