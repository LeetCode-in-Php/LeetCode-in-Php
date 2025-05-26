<?php

namespace leetcode\g0201_0300\s0236_lowest_common_ancestor_of_a_binary_tree;

// #Medium #Top_100_Liked_Questions #Depth_First_Search #Tree #Binary_Tree
// #LeetCode_75_Binary_Tree/DFS #Data_Structure_II_Day_18_Tree #Udemy_Tree_Stack_Queue
// #Top_Interview_150_Binary_Tree_General #Big_O_Time_O(n)_Space_O(n)
// #2023_12_23_Time_14_ms_(85.71%)_Space_26.1_MB_(57.14%)

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */
class Solution {
    /**
     * @param TreeNode $root
     * @param TreeNode $p
     * @param TreeNode $q
     * @return TreeNode
     */
    public function lowestCommonAncestor($root, $p, $q) {
        if ($root == null) {
            return null;
        }
        if ($root->val == $p->val || $root->val == $q->val) {
            return $root;
        }
        $left = $this->lowestCommonAncestor($root->left, $p, $q);
        $right = $this->lowestCommonAncestor($root->right, $p, $q);
        if ($left != null && $right != null) {
            return $root;
        }
        if ($left != null) {
            return $left;
        }
        return $right;
    }
}
