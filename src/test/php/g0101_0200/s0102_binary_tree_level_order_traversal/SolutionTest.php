<?php

namespace leetcode\g0101_0200\s0102_binary_tree_level_order_traversal;

use leetcode\com_github_leetcode\TreeUtils;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testLevelOrder() {
        $root = TreeUtils::constructBinaryTree(array(3, 9, 20, null, null, 15, 7));
        $this->assertEqual(array(array(3), array(9, 20), array(15, 7)),
            (new Solution())->levelOrder($root));
    }

    public function testLevelOrder2() {
        $root = TreeUtils::constructBinaryTree(array(1));
        $this->assertEquals(array(array(1)), (new Solution())->levelOrder($root));
    }

    public function testLevelOrder3() {
        $this->assertEquals(array(), (new Solution())->levelOrder(null));
    }
}
