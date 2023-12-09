<?php

namespace leetcode\g0001_0100\s0001_two_sum;

// #Easy #Top_100_Liked_Questions #Top_Interview_Questions #Array #Hash_Table
// #Data_Structure_I_Day_2_Array #Level_1_Day_13_Hashmap #Udemy_Arrays #Big_O_Time_O(n)_Space_O(n)
// #2023_11_29_Time_9_ms_(97.47%)_Space_19.8_MB_(77.40%)

class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    public function twoSum($nums, $target) {
        $ind = [];
        for ($i = 0; $i < count($nums); ++$i) {
            $complement = $target - $nums[$i];
            if (array_key_exists($complement, $ind)) {
                return [$ind[$complement], $i];
            }
            $ind[$nums[$i]] = $i;
        }
        return [-1, -1];
    }
}
