<?php

namespace leetcode\g0101_0200\s0101_symmetric_tree;

use leetcode\com_github_leetcode\TreeUtils;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testSymmetricTree() {
        $root = TreeUtils::constructBinaryTree(array(1, 2, 2, 3, 4, 4, 3));
        $this->assertEquals(true, (new Solution())->isSymmetric($root));
    }

    public function testSymmetricTree2() {
        $root = TreeUtils::constructBinaryTree(array(1, 2, 2, null, 3, null, 3));
        $this->assertEquals(false, (new Solution())->isSymmetric($root));
    }
}
