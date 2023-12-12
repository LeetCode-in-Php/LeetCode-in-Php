<?php

namespace leetcode\g0101_0200\s0105_construct_binary_tree_from_preorder_and_inorder_traversal;

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase {
    public function testConstructBinaryTree() {
        $preorder = array(3, 9, 20, 15, 7);
        $inorder = array(9, 3, 15, 20, 7);
        $actual = (new Solution())->buildTree($preorder, $inorder);
        $this->assertEquals("3,9,20,15,7", $actual->toString());
    }

    public function testConstructBinaryTree2() {
        $preorder = array(-1);
        $inorder = array(-1);
        $actual = (new Solution())->buildTree($preorder, $inorder);
        $this->assertEquals("-1", $actual->toString());
    }
}
