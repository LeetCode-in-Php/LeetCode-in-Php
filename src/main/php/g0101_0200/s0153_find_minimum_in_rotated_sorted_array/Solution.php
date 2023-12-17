<?php

namespace leetcode\g0101_0200\s0153_find_minimum_in_rotated_sorted_array;

// #Medium #Top_100_Liked_Questions #Array #Binary_Search #Algorithm_II_Day_2_Binary_Search
// #Binary_Search_I_Day_12 #Udemy_Binary_Search #Big_O_Time_O(log_N)_Space_O(log_N)
// #2023_12_17_Time_9_ms_(73.47%)_Space_19.5_MB_(20.41%)

class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    public function findMin($nums) {
        $l = 0;
        $r = count($nums) - 1;
        return $this->findMinUtil($nums, $l, $r);
    }

    private function findMinUtil($nums, $l, $r) {
        if ($l == $r) {
            return $nums[$l];
        }
        $mid = intval(($l + $r) / 2);
        if ($mid == $l && $nums[$mid] < $nums[$r]) {
            return $nums[$l];
        }
        if ($mid - 1 >= 0 && $nums[$mid - 1] > $nums[$mid]) {
            return $nums[$mid];
        }
        if ($nums[$mid] < $nums[$l]) {
            return $this->findMinUtil($nums, $l, $mid - 1);
        } elseif ($nums[$mid] > $nums[$r]) {
            return $this->findMinUtil($nums, $mid + 1, $r);
        }
        return $this->findMinUtil($nums, $l, $mid - 1);
    }
}
