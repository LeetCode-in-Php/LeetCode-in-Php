<?php

namespace leetcode\g0201_0300\s0300_longest_increasing_subsequence;

// #Medium #Top_100_Liked_Questions #Array #Dynamic_Programming #Binary_Search
// #Algorithm_II_Day_16_Dynamic_Programming #Binary_Search_II_Day_3 #Dynamic_Programming_I_Day_18
// #Udemy_Dynamic_Programming #Top_Interview_150_1D_DP #Big_O_Time_O(n*log_n)_Space_O(n)
// #2023_12_23_Time_24_ms_(90.91%)_Space_19.9_MB_(18.18%)

class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function lengthOfLIS($nums) {
        if ($nums == null || count($nums) == 0) {
            return 0;
        }
        $dp = array_fill(0, count($nums) + 1, PHP_INT_MAX);
        // prefill the dp table
        for ($i = 1; $i < count($dp); $i++) {
            $dp[$i] = PHP_INT_MAX;
        }
        $left = 1;
        $right = 1;
        foreach ($nums as $curr) {
            $start = $left;
            $end = $right;
            // binary search, find the one that is lower than curr
            while ($start + 1 < $end) {
                $mid = $start + (int)(($end - $start) / 2);
                if ($dp[$mid] > $curr) {
                    $end = $mid;
                } else {
                    $start = $mid;
                }
            }
            // update our dp table
            if ($dp[$start] > $curr) {
                $dp[$start] = $curr;
            } elseif ($curr > $dp[$start] && $curr < $dp[$end]) {
                $dp[$end] = $curr;
            } elseif ($curr > $dp[$end]) {
                $dp[++$end] = $curr;
                $right++;
            }
        }
        return $right;
    }
}
