<?php

namespace leetcode\g0001_0100\s0033_search_in_rotated_sorted_array;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #Array #Binary_Search
// #Algorithm_II_Day_1_Binary_Search #Binary_Search_I_Day_11 #Level_2_Day_8_Binary_Search
// #Udemy_Binary_Search #Big_O_Time_O(log_n)_Space_O(1)
// #2023_12_09_Time_7_ms_(83.17%)_Space_19.1_MB_(83.17%)

class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    public function search($nums, $target) {
        $lo = 0;
        $hi = count($nums) - 1;
        while ($lo <= $hi) {
            $mid = (($hi - $lo) >> 1) + $lo;
            if ($target == $nums[$mid]) {
                return $mid;
            }
            if ($nums[$lo] <= $nums[$mid]) {
                if ($nums[$lo] <= $target && $target <= $nums[$mid]) {
                    $hi = $mid - 1;
                } else {
                    $lo = $mid + 1;
                }
            } elseif ($nums[$mid] <= $target && $target <= $nums[$hi]) {
                $lo = $mid + 1;
            } else {
                $hi = $mid - 1;
            }
        }
        return -1;
    }
}
