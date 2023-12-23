<?php

namespace leetcode\g0201_0300\s0230_kth_smallest_element_in_a_bst;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #Depth_First_Search #Tree #Binary_Tree
// #Binary_Search_Tree #Data_Structure_II_Day_17_Tree #Level_2_Day_9_Binary_Search_Tree
// #Big_O_Time_O(n)_Space_O(n) #2023_12_23_Time_11_ms_(75.00%)_Space_22_MB_(96.88%)

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
    private $k;
    private $count = 0;
    private $val;

    /**
     * @param TreeNode $root
     * @param Integer $k
     * @return Integer
     */
    public function kthSmallest($root, $k) {
        $this->k = $k;
        $this->calculate($root);
        return $this->val;
    }

    private function calculate($node) {
        if ($node->left == null && $node->right == null) {
            $this->count++;
            if ($this->count == $this->k) {
                $this->val = $node->val;
            }
            return;
        }
        if ($node->left != null) {
            $this->calculate($node->left);
        }
        $this->count++;
        if ($this->count == $this->k) {
            $this->val = $node->val;
            return;
        }
        if ($node->right != null) {
            $this->calculate($node->right);
        }
    }
}
