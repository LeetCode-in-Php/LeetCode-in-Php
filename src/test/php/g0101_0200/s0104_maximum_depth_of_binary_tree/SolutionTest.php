<?php

namespace leetcode\g0101_0200\s0104_maximum_depth_of_binary_tree;

use leetcode\com_github_leetcode\TreeUtils;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testMaxDepthBinaryTree() {
        $root = TreeUtils::constructBinaryTree(array(3, 9, 20, null, null, 15, 7));
        $this->assertEquals(3, (new Solution())->maxDepth($root));
    }

    public function testMaxDepthBinaryTree2() {
        $root = TreeUtils::constructBinaryTree(array(1, null, 2));
        $this->assertEquals(2, (new Solution())->maxDepth($root));
    }
}
