<?php

namespace leetcode\g0001_0100\s0041_first_missing_positive;

// #Hard #Top_100_Liked_Questions #Top_Interview_Questions #Array #Hash_Table #Udemy_Arrays
// #Big_O_Time_O(n)_Space_O(n) #2023_12_09_Time_111_ms_(90.48%)_Space_33.6_MB_(69.05%)

class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function firstMissingPositive($nums) {
        $positiveNumbers = array_filter($nums, function ($num) {
            return $num > 0;
        });
        $positiveNumbers = array_flip($positiveNumbers);
        for ($i = 1; $i <= count($positiveNumbers) + 1; $i++) {
            if (isset($positiveNumbers[$i]) === false) {
                return $i;
            }
        }
    }
}
