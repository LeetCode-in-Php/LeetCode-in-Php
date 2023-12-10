<?php

namespace leetcode\g0001_0100\s0078_subsets;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #Array #Bit_Manipulation #Backtracking
// #Algorithm_II_Day_9_Recursion_Backtracking #Udemy_Backtracking/Recursion
// #Big_O_Time_O(2^n)_Space_O(n*2^n) #2023_12_10_Time_7_ms_(69.23%)_Space_19.5_MB_(84.62%)

class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    public function subsets($nums) {
        $res = array();
        $this->solve($nums, array(), $res, 0);
        return $res;
    }

    private function solve($nums, $temp, &$res, $start) {
        array_push($res, $temp);
        for ($i = $start; $i < count($nums); $i++) {
            array_push($temp, $nums[$i]);
            $this->solve($nums, $temp, $res, $i + 1);
            array_pop($temp);
        }
    }
}
