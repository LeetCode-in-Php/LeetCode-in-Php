<?php

namespace leetcode\g0001_0100\s0015_3sum;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #Array #Sorting #Two_Pointers
// #Data_Structure_II_Day_1_Array #Algorithm_II_Day_3_Two_Pointers #Udemy_Two_Pointers
// #Top_Interview_150_Two_Pointers #Big_O_Time_O(n*log(n))_Space_O(n^2)
// #2024_01_12_Time_243_ms_(81.45%)_Space_26.7_MB_(79.84%)

class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    public function threeSum($nums) {
        sort($nums);
        $len = count($nums);
        $result = [];
        for ($i = 0; $i < $len - 2; $i++) {
            $l = $i + 1;
            $r = $len - 1;
            while ($r > $l) {
                $sum = $nums[$i] + $nums[$l] + $nums[$r];
                if ($sum < 0) {
                    $l++;
                } elseif ($sum > 0) {
                    $r--;
                } else {
                    $list = [$nums[$i], $nums[$l], $nums[$r]];
                    $result[] = $list;
                    while ($l < $r && $nums[$l + 1] == $nums[$l]) {
                        $l++;
                    }
                    while ($r > $l && $nums[$r - 1] == $nums[$r]) {
                        $r--;
                    }
                    $l++;
                    $r--;
                }
            }
            while ($i < $len - 1 && $nums[$i + 1] == $nums[$i]) {
                $i++;
            }
        }
        return $result;
    }
}
