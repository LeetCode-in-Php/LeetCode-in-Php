<?php

namespace leetcode\g0201_0300\s0226_invert_binary_tree;

use PHPUnit\Framework\TestCase;
use leetcode\com_github_leetcode\TreeUtils;

class SolutionTest extends TestCase {
    public function testInvertTree() {
        $root = TreeUtils::constructBinaryTree(array(4, 2, 7, 1, 3, 6, 9));
        $this->assertEquals("4,7,9,6,2,3,1", (new Solution())->invertTree($root));
    }

    public function testInvertTree2() {
        $root = TreeUtils::constructBinaryTree(array(2, 1, 3));
        $this->assertEquals("2,3,1", (new Solution())->invertTree($root));
    }
}
