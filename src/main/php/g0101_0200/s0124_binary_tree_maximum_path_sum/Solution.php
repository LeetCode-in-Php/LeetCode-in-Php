<?php

namespace leetcode\g0101_0200\s0124_binary_tree_maximum_path_sum;

// #Hard #Top_100_Liked_Questions #Top_Interview_Questions #Dynamic_Programming #Depth_First_Search
// #Tree #Binary_Tree #Udemy_Tree_Stack_Queue #Big_O_Time_O(N)_Space_O(N)
// #2023_12_11_Time_16_ms_(100.00%)_Space_25.2_MB_(60.00%)

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
    private $max;

    function __construct() {
        $this->max = PHP_INT_MIN;
    }

    private function helper($root) {
        if ($root == null) {
            return 0;
        }
        // to avoid the -ve values in left side we will compare them with 0
        $left = max(0, $this->helper($root->left));
        $right = max(0, $this->helper($root->right));
        $current = $root->val + $left + $right;
        if ($current > $this->max) {
            $this->max = $current;
        }
        return $root->val + max($left, $right);
    }

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function maxPathSum($root) {
        $this->helper($root);
        return $this->max;
    }
}
