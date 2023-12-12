<?php

namespace leetcode\g0101_0200\s0114_flatten_binary_tree_to_linked_list;

// #Medium #Top_100_Liked_Questions #Depth_First_Search #Tree #Binary_Tree #Stack #Linked_List
// #Udemy_Linked_List #Big_O_Time_O(N)_Space_O(N)
// #2023_12_11_Time_3_ms_(100.00%)_Space_19.6_MB_(14.29%)

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
     * @return NULL
     */
    function flatten($root) {
        if ($root != null) {
            $this->findTail($root);
        }
    }

    private function findTail($root) {
        $left = $root->left;
        $right = $root->right;
        $tail = null;
        // find the tail of left subtree, tail means the most left leaf
        if ($left != null) {
            $tail = $this->findTail($left);
            // stitch the right subtree below the tail
            $root->left = null;
            $root->right = $left;
            $tail->right = $right;
        } else {
            $tail = $root;
        }
        // find tail of the right subtree
        if ($tail->right == null) {
            return $tail;
        } else {
            return $this->findTail($tail->right);
        }
    }
}
