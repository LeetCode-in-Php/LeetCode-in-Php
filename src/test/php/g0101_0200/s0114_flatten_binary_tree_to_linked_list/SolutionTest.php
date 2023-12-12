<?php

namespace leetcode\g0101_0200\s0114_flatten_binary_tree_to_linked_list;

use leetcode\com_github_leetcode\TreeUtils;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testFlatten() {
        $root = TreeUtils::constructBinaryTree(array(1, 2, 5, 3, 4, null, 6));
        (new Solution())->flatten($root);
        $this->assertEquals("1,null,2,null,3,null,4,null,5,null,6", $root->toString());
    }

    public function testFlatten2() {
        $root = TreeUtils::constructBinaryTree(array(0));
        (new Solution())->flatten($root);
        $this->assertEquals("0", $root->toString());
    }
}
