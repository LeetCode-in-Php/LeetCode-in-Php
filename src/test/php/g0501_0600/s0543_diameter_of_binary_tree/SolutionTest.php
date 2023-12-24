<?php

namespace leetcode\g0501_0600\s0543_diameter_of_binary_tree;

use leetcode\com_github_leetcode\TreeNode;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testDiameterOfBinaryTree() {
        $this->assertEquals(3, (new Solution())->diameterOfBinaryTree(TreeNode::create(array(1, 2, 3, 4, 5))));
    }

    public function testDiameterOfBinaryTree2() {
        $this->assertEquals(1, (new Solution())->diameterOfBinaryTree(TreeNode::create(array(1, 2))));
    }
}
