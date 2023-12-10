<?php

namespace leetcode\g0001_0100\s0062_unique_paths;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #Dynamic_Programming #Math
// #Combinatorics #Algorithm_II_Day_13_Dynamic_Programming #Dynamic_Programming_I_Day_15
// #Level_1_Day_11_Dynamic_Programming #Big_O_Time_O(m*n)_Space_O(m*n)
// #2023_12_10_Time_3_ms_(81.58%)_Space_19.3_MB_(15.79%)

class Solution {
    /**
     * @param Integer $m
     * @param Integer $n
     * @return Integer
     */
    public function uniquePaths($m, $n) {
        $dp = array_fill(0, $m, array_fill(0, $n, 0));
        for ($i = 0; $i < $m; $i++) {
            $dp[$i][0] = 1;
        }
        for ($j = 0; $j < $n; $j++) {
            $dp[0][$j] = 1;
        }
        for ($i = 1; $i < $m; $i++) {
            for ($j = 1; $j < $n; $j++) {
                $dp[$i][$j] = $dp[$i - 1][$j] + $dp[$i][$j - 1];
            }
        }
        return $dp[$m - 1][$n - 1];
    }
}
