<?php

namespace leetcode\g0101_0200\s0104_maximum_depth_of_binary_tree;

// #Easy #Top_100_Liked_Questions #Top_Interview_Questions #Depth_First_Search #Breadth_First_Search
// #Tree #Binary_Tree #Data_Structure_I_Day_11_Tree
// #Programming_Skills_I_Day_10_Linked_List_and_Tree #Udemy_Tree_Stack_Queue
// #Big_O_Time_O(N)_Space_O(H) #2023_12_11_Time_9_ms_(63.06%)_Space_20.5_MB_(87.90%)

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
     * @return Integer
     */
    function maxDepth($root) {
        return $this->findDepth($root, 0);
    }

    private function findDepth($node, $currentDepth) {
        if ($node == null) {
            return 0;
        }
        $currentDepth++;
        return 1
            + max($this->findDepth($node->left, $currentDepth), $this->findDepth($node->right, $currentDepth));
    }
}
