<?php

namespace leetcode\g0001_0100\s0046_permutations;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #Array #Backtracking
// #Algorithm_I_Day_11_Recursion_Backtracking #Level_2_Day_20_Brute_Force/Backtracking
// #Udemy_Backtracking/Recursion #Top_Interview_150_Backtracking #Big_O_Time_O(n*n!)_Space_O(n+n!)
// #2023_12_09_Time_4_ms_(92.42%)_Space_19.2_MB_(92.42%)

class Solution {
    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    public function permute($nums) {
        if ($nums == null || count($nums) == 0) {
            return array();
        }
        $finalResult = array();
        $this->permuteRecur($nums, $finalResult, array(), array_fill(0, count($nums), false));
        return $finalResult;
    }

    private function permuteRecur($nums, &$finalResult, $currResult, $used) {
        if (count($currResult) == count($nums)) {
            array_push($finalResult, $currResult);
            return;
        }
        for ($i = 0; $i < count($nums); $i++) {
            if ($used[$i]) {
                continue;
            }
            array_push($currResult, $nums[$i]);
            $used[$i] = true;
            $this->permuteRecur($nums, $finalResult, $currResult, $used);
            $used[$i] = false;
            array_pop($currResult);
        }
    }
}
