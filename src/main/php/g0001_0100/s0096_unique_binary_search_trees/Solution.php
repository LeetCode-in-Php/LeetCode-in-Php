<?php

namespace leetcode\g0001_0100\s0096_unique_binary_search_trees;

// #Medium #Top_100_Liked_Questions #Dynamic_Programming #Math #Tree #Binary_Tree
// #Binary_Search_Tree #Dynamic_Programming_I_Day_11 #Big_O_Time_O(n)_Space_O(1)
// #2023_12_10_Time_0_ms_(100.00%)_Space_19.1_MB_(44.44%)

class Solution {
    /**
     * @param Integer $n
     * @return Integer
     */
    public function numTrees($n) {
        $result = 1;
        for ($i = 0; $i < $n; $i++) {
            $result *= 2 * $n - $i;
            $result /= $i + 1;
        }
        $result /= $n + 1;
        return (int)$result;
    }
}
