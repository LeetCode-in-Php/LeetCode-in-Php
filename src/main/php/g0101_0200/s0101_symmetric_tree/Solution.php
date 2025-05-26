<?php

namespace leetcode\g0101_0200\s0101_symmetric_tree;

// #Easy #Top_100_Liked_Questions #Top_Interview_Questions #Depth_First_Search #Breadth_First_Search
// #Tree #Binary_Tree #Data_Structure_I_Day_11_Tree #Level_2_Day_15_Tree
// #Top_Interview_150_Binary_Tree_General #Big_O_Time_O(N)_Space_O(log(N))
// #2023_12_11_Time_6_ms_(76.40%)_Space_19.4_MB_(28.09%)

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
    /**
     * @param TreeNode $root
     * @return Boolean
     */
    function isSymmetric($root) {
        if ($root == null) {
            return true;
        }
        return $this->helper($root->left, $root->right);
    }

    private function helper($leftNode, $rightNode) {
        if ($leftNode == null || $rightNode == null) {
            return $leftNode == null && $rightNode == null;
        }
        if ($leftNode->val != $rightNode->val) {
            return false;
        }
        return $this->helper($leftNode->left, $rightNode->right) && $this->helper($leftNode->right, $rightNode->left);
    }
}
