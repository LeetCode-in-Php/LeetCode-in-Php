<?php

namespace leetcode\g0001_0100\s0035_search_insert_position;

// #Easy #Top_100_Liked_Questions #Array #Binary_Search #Algorithm_I_Day_1_Binary_Search
// #Binary_Search_I_Day_2 #Big_O_Time_O(log_n)_Space_O(1)
// #2023_12_09_Time_8_ms_(85.09%)_Space_19.7_MB_(64.77%)

class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    public function searchInsert($nums, $target) {
        $lo = 0;
        $hi = count($nums) - 1;
        while ($lo <= $hi) {
            $mid = $lo + intval(($hi - $lo) / 2);
            if ($target == $nums[$mid]) {
                return $mid;
            } elseif ($target < $nums[$mid]) {
                $hi = $mid - 1;
            } elseif ($target > $nums[$mid]) {
                $lo = $mid + 1;
            }
        }
        return $lo;
    }
}
