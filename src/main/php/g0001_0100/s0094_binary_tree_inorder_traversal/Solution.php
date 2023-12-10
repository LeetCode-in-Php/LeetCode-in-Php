<?php

namespace leetcode\g0001_0100\s0094_binary_tree_inorder_traversal;

// #Easy #Top_100_Liked_Questions #Top_Interview_Questions #Depth_First_Search #Tree #Binary_Tree
// #Stack #Data_Structure_I_Day_10_Tree #Udemy_Tree_Stack_Queue #Big_O_Time_O(n)_Space_O(n)
// #2023_12_10_Time_3_ms_(82.09%)_Space_19.1_MB_(47.76%)

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
     * @return Integer[]
     */
    public function inorderTraversal($root) {
        if ($root == null) {
            return array();
        }
        $answer = array();
        $this->inorderTraversalLocal($root, $answer);
        return $answer;
    }

    function inorderTraversalLocal($root, &$answer) {
        if ($root == null) {
            return;
        }
        if ($root->left != null) {
            $this->inorderTraversalLocal($root->left, $answer);
        }
        array_push($answer, $root->val);
        if ($root->right != null) {
            $this->inorderTraversalLocal($root->right, $answer);
        }
    }
}
