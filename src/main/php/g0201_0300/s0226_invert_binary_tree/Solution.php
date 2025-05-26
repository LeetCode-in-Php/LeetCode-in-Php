<?php

namespace leetcode\g0201_0300\s0226_invert_binary_tree;

// #Easy #Top_100_Liked_Questions #Depth_First_Search #Breadth_First_Search #Tree #Binary_Tree
// #Data_Structure_I_Day_12_Tree #Level_2_Day_6_Tree #Udemy_Tree_Stack_Queue
// #Top_Interview_150_Binary_Tree_General #Big_O_Time_O(n)_Space_O(n)
// #2023_12_21_Time_6_ms_(62.79%)_Space_19.6_MB_(13.18%)

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
     * @return TreeNode
     */
    public function invertTree($root) {
        if ($root == null) {
            return null;
        }
        $temp = $root->left;
        $root->left = $this->invertTree($root->right);
        $root->right = $this->invertTree($temp);
        return $root;
    }
}
