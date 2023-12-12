<?php

namespace leetcode\g0101_0200\s0136_single_number;

// #Easy #Top_100_Liked_Questions #Top_Interview_Questions #Array #Bit_Manipulation
// #Data_Structure_II_Day_1_Array #Algorithm_I_Day_14_Bit_Manipulation #Udemy_Integers
// #Big_O_Time_O(N)_Space_O(1) #2023_12_11_Time_33_ms_(80.08%)_Space_21.8_MB_(33.07%)

class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
        $res = 0;
        foreach ($nums as $num) {
            $res ^= $num;
        }
        return $res;
    }
}
