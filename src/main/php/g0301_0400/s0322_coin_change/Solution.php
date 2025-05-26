<?php

namespace leetcode\g0301_0400\s0322_coin_change;

// #Medium #Top_100_Liked_Questions #Array #Dynamic_Programming #Breadth_First_Search
// #Algorithm_II_Day_18_Dynamic_Programming #Dynamic_Programming_I_Day_20
// #Level_2_Day_12_Dynamic_Programming #Top_Interview_150_1D_DP #Big_O_Time_O(m*n)_Space_O(amount)
// #2023_12_24_Time_185_ms_(96.30%)_Space_19.4_MB_(62.96%)

class Solution {
    /**
     * @param Integer[] $coins
     * @param Integer $amount
     * @return Integer
     */
    public function coinChange($coins, $amount) {
        $dp = array_fill(0, $amount + 1, 0);
        $dp[0] = 1;
        foreach ($coins as $coin) {
            for ($i = $coin; $i <= $amount; $i++) {
                $prev = $dp[$i - $coin];
                if ($prev > 0) {
                    if ($dp[$i] == 0) {
                        $dp[$i] = $prev + 1;
                    } else {
                        $dp[$i] = min($dp[$i], $prev + 1);
                    }
                }
            }
        }
        return $dp[$amount] - 1;
    }
}
