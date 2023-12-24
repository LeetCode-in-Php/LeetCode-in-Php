<?php

namespace leetcode\g0501_0600\s0543_diameter_of_binary_tree;

// #Easy #Top_100_Liked_Questions #Depth_First_Search #Tree #Binary_Tree #Level_2_Day_7_Tree
// #Udemy_Tree_Stack_Queue #Big_O_Time_O(n)_Space_O(n)
// #2023_12_24_Time_0_ms_(100.00%)_Space_20.8_MB_(48.28%)

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
    private $diameter;

    /**
     * @param TreeNode $root
     * @return Integer
     */
    public function diameterOfBinaryTree($root) {
        $this->diameter = 0;
        $this->diameterOfBinaryTreeUtil($root);
        return $this->diameter;
    }

    private function diameterOfBinaryTreeUtil($root) {
        if ($root == null) {
            return 0;
        }
        $leftLength = $root->left != null ? 1 + $this->diameterOfBinaryTreeUtil($root->left) : 0;
        $rightLength = $root->right != null ? 1 + $this->diameterOfBinaryTreeUtil($root->right) : 0;
        $this->diameter = max($this->diameter, $leftLength + $rightLength);
        return max($leftLength, $rightLength);
    }
}
