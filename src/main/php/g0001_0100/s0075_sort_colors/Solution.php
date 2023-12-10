<?php

namespace leetcode\g0001_0100\s0075_sort_colors;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #Array #Sorting #Two_Pointers
// #Data_Structure_II_Day_2_Array #Udemy_Arrays #Big_O_Time_O(n)_Space_O(1)
// #2023_12_10_Time_3_ms_(88.78%)_Space_19.2_MB_(20.41%)

class Solution {
    /**
     * @param Integer[] $nums
     * @return NULL
     */
    public function sortColors(&$nums) {
        $zeroes = 0;
        $ones = 0;
        for ($i = 0; $i < count($nums); $i++) {
            if ($nums[$i] == 0) {
                $nums[$zeroes++] = 0;
            } elseif ($nums[$i] == 1) {
                $ones++;
            }
        }
        for ($j = $zeroes; $j < $zeroes + $ones; $j++) {
            $nums[$j] = 1;
        }
        for ($k = $zeroes + $ones; $k < count($nums); $k++) {
            $nums[$k] = 2;
        }
    }
}
