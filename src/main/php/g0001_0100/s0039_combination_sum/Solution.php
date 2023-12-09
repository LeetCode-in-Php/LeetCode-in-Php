<?php

namespace leetcode\g0001_0100\s0039_combination_sum;

// #Medium #Top_100_Liked_Questions #Array #Backtracking #Algorithm_II_Day_10_Recursion_Backtracking
// #Level_2_Day_20_Brute_Force/Backtracking #Udemy_Backtracking/Recursion
// #Big_O_Time_O(2^n)_Space_O(n+2^n) #2023_12_09_Time_11_ms_(87.10%)_Space_19.5_MB_(19.36%)

class Solution {
    /**
     * @param Integer[] $candidates
     * @param Integer $target
     * @return Integer[][]
     */
    public function combinationSum($coins, $amount) {
        $ans = array();
        $subList = array();
        $this->combinationSumRec(count($coins), $coins, $amount, $subList, $ans);
        return $ans;
    }

    private function combinationSumRec($n, $coins, $amount, &$subList, &$ans) {
        if ($amount == 0 || $n == 0) {
            if ($amount == 0) {
                $base = $subList;
                array_push($ans, $base);
            }
            return;
        }
        if ($amount - $coins[$n - 1] >= 0) {
            array_push($subList, $coins[$n - 1]);
            $this->combinationSumRec($n, $coins, $amount - $coins[$n - 1], $subList, $ans);
            array_pop($subList);
        }
        $this->combinationSumRec($n - 1, $coins, $amount, $subList, $ans);
    }
}
