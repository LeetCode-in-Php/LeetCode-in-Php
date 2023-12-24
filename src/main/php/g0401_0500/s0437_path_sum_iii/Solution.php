<?php

namespace leetcode\g0401_0500\s0437_path_sum_iii;

// #Medium #Top_100_Liked_Questions #Depth_First_Search #Tree #Binary_Tree #Level_2_Day_7_Tree
// #Big_O_Time_O(n)_Space_O(n) #2023_12_24_Time_13_ms_(81.25%)_Space_20.1_MB_(43.75%)

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
     * @param Integer $targetSum
     * @return Integer
     */
    public function pathSum(?TreeNode $root, int $targetSum, int $cursumm = 0, array &$prev = []): int {
        if (!$root) {
            return 0;
        }
        $count = 0;
        $cursumm += $root->val;
        if ($cursumm === $targetSum) {
            $count++;
        }
        $count += $prev[$cursumm - $targetSum] ?? 0;
        $prev[$cursumm] = 1 + $prev[$cursumm] ?? 0;

        $count += $this->pathSum($root->left, $targetSum, $cursumm, $prev) +
            $this->pathSum($root->right, $targetSum, $cursumm, $prev);
        $prev[$cursumm]--;
        return $count;
    }
}
