<?php

namespace leetcode\g0101_0200\s0105_construct_binary_tree_from_preorder_and_inorder_traversal;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #Array #Hash_Table #Tree #Binary_Tree
// #Divide_and_Conquer #Data_Structure_II_Day_15_Tree #Top_Interview_150_Binary_Tree_General
// #Big_O_Time_O(N)_Space_O(N) #2023_12_11_Time_14_ms_(63.33%)_Space_21.1_MB_(93.33%)

use leetcode\com_github_leetcode\TreeNode;

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {
    private $j;
    private $map;

    function __construct() {
        $this->j = 0;
        $this->map = array();
    }

    function get($key) {
        return $this->map[$key];
    }

    private function answer($preorder, $inorder, $start, $end) {
        if ($start > $end || $this->j > count($preorder)) {
            return null;
        }
        $value = $preorder[$this->j++];
        $index = $this->get($value);
        $node = new TreeNode($value);
        $node->left = $this->answer($preorder, $inorder, $start, $index - 1);
        $node->right = $this->answer($preorder, $inorder, $index + 1, $end);
        return $node;
    }

    /**
     * @param Integer[] $preorder
     * @param Integer[] $inorder
     * @return TreeNode
     */
    function buildTree($preorder, $inorder) {
        $this->j = 0;
        for ($i = 0; $i < count($preorder); $i++) {
            $this->map[$inorder[$i]] = $i;
        }
        return $this->answer($preorder, $inorder, 0, count($preorder) - 1);
    }
}
