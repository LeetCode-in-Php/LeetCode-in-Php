<?php

namespace leetcode\g0001_0100\s0098_validate_binary_search_tree;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #Depth_First_Search #Tree #Binary_Tree
// #Binary_Search_Tree #Data_Structure_I_Day_14_Tree #Level_1_Day_8_Binary_Search_Tree
// #Udemy_Tree_Stack_Queue #Big_O_Time_O(N)_Space_O(log(N))
// #2023_12_10_Time_10_ms_(70.97%)_Space_21.7_MB_(58.06%)

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
    public function isValidBST($root) {
        return $this->solve($root, PHP_INT_MIN, PHP_INT_MAX);
    }

    private function solve($root, $left, $right) {
        if ($root == null) {
            return true;
        }
        if ($root->val <= $left || $root->val >= $right) {
            return false;
        }
        return $this->solve($root->left, $left, $root->val) && $this->solve($root->right, $root->val, $right);
    }
}
