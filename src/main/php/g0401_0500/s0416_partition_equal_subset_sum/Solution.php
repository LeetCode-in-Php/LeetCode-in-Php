<?php

namespace leetcode\g0401_0500\s0416_partition_equal_subset_sum;

// #Medium #Top_100_Liked_Questions #Array #Dynamic_Programming #Level_2_Day_13_Dynamic_Programming
// #Big_O_Time_O(n*sums)_Space_O(n*sums) #2023_12_24_Time_245_ms_(86.67%)_Space_19.5_MB_(93.33%)

class Solution {
    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    public function canPartition($nums) {
        $sums = 0;
        foreach ($nums as $num) {
            $sums += $num;
        }
        if ($sums % 2 == 1) {
            return false;
        }
        $sums /= 2;
        $dp = array_fill(0, $sums + 1, false);
        $dp[0] = true;
        foreach ($nums as $num) {
            for ($sum = $sums; $sum >= $num; $sum--) {
                $dp[$sum] = $dp[$sum] || $dp[$sum - $num];
            }
        }
        return $dp[$sums];
    }
}
