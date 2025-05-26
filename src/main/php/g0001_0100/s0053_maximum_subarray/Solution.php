<?php

namespace leetcode\g0001_0100\s0053_maximum_subarray;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #Array #Dynamic_Programming
// #Divide_and_Conquer #Data_Structure_I_Day_1_Array #Dynamic_Programming_I_Day_5
// #Udemy_Famous_Algorithm #Top_Interview_150_Kadane's_Algorithm #Big_O_Time_O(n)_Space_O(1)
// #2023_12_10_Time_185_ms_(95.51%)_Space_31.8_MB_(91.01%)

class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function maxSubArray($nums) {
        $maxi = PHP_INT_MIN;
        $sum = 0;
        foreach ($nums as $num) {
            // calculating sub-array sum
            $sum += $num;
            $maxi = max($sum, $maxi);
            if ($sum < 0) {
                // there is no point to carry a -ve subarray sum. hence setting to 0
                $sum = 0;
            }
        }
        return $maxi;
    }
}
