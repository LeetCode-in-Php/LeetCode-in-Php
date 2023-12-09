<?php

namespace leetcode\g0001_0100\s0034_find_first_and_last_position_of_element_in_sorted_array;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #Array #Binary_Search
// #Algorithm_II_Day_1_Binary_Search #Binary_Search_I_Day_5 #Big_O_Time_O(log_n)_Space_O(1)
// #2023_12_09_Time_19_ms_(81.01%)_Space_23.5_MB_(22.78%)

class Solution {
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    public function searchRange($nums, $target) {
        $ans = array();
        $ans[0] = $this->helper($nums, $target, false);
        $ans[1] = $this->helper($nums, $target, true);
        return $ans;
    }

    private function helper($nums, $target, $equals) {
        $l = 0;
        $r = count($nums) - 1;
        $result = -1;
        while ($l <= $r) {
            $mid = $l + intval(($r - $l) / 2);
            if ($nums[$mid] == $target) {
                $result = $mid;
            }
            if ($nums[$mid] < $target || ($nums[$mid] == $target && $equals)) {
                $l = $mid + 1;
            } else {
                $r = $mid - 1;
            }
        }
        return $result;
    }
}
