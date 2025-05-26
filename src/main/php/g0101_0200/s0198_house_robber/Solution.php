<?php

namespace leetcode\g0101_0200\s0198_house_robber;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #Array #Dynamic_Programming
// #LeetCode_75_DP/1D #Algorithm_I_Day_12_Dynamic_Programming #Dynamic_Programming_I_Day_3
// #Level_2_Day_12_Dynamic_Programming #Udemy_Dynamic_Programming #Top_Interview_150_1D_DP
// #Big_O_Time_O(n)_Space_O(n) #2023_12_21_Time_4_ms_(64.29%)_Space_19.8_MB_(9.52%)

class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function rob($nums) {
        $n = count($nums);
        if ($n == 0) {
            return 0;
        }
        if ($n == 1) {
            return $nums[0];
        }
        if ($n == 2) {
            return max($nums[0], $nums[1]);
        }
        $profit = array();
        $profit[0] = $nums[0];
        $profit[1] = max($nums[1], $nums[0]);
        for ($i = 2; $i < $n; $i++) {
            $profit[$i] = max($profit[$i - 1], $nums[$i] + $profit[$i - 2]);
        }
        return $profit[$n - 1];
    }
}
