<?php

namespace leetcode\g0401_0500\s0494_target_sum;

// #Medium #Array #Dynamic_Programming #Backtracking #Big_O_Time_O(n*(sum+s))_Space_O(n*(sum+s))
// #2023_12_24_Time_27_ms_(75.00%)_Space_20.3_MB_(8.33%)

class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    public function findTargetSumWays($nums, $s) {
        $sum = 0;
        $s = abs($s);
        foreach ($nums as $num) {
            $sum += $num;
        }
        // Invalid s, just return 0
        if ($s > $sum || ($sum + $s) % 2 != 0) {
            return 0;
        }
        $dp = array_fill(0, ($sum + $s) / 2 + 1, array_fill(0, count($nums) + 1, 0));
        $dp[0][0] = 1;
        // empty knapsack must be processed specially
        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] == 0) {
                $dp[0][$i + 1] = $dp[0][$i] * 2;
            } else {
                $dp[0][$i + 1] = $dp[0][$i];
            }
        }
        for ($i = 1; $i < count($dp); $i++) {
            for ($j = 0; $j < count($nums); $j++) {
                $dp[$i][$j + 1] += $dp[$i][$j];
                if ($nums[$j] <= $i) {
                    $dp[$i][$j + 1] += $dp[$i - $nums[$j]][$j];
                }
            }
        }
        return $dp[($sum + $s) / 2][count($nums)];
    }
}
