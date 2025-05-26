<?php

namespace leetcode\g0001_0100\s0017_letter_combinations_of_a_phone_number;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #String #Hash_Table #Backtracking
// #LeetCode_75_Backtracking #Algorithm_II_Day_11_Recursion_Backtracking
// #Udemy_Backtracking/Recursion #Top_Interview_150_Backtracking #Big_O_Time_O(4^n)_Space_O(n)
// #2023_12_07_Time_5_ms_(60.19%)_Space_19.1_MB_(59.26%)

class Solution {
    /**
     * @param String $digits
     * @return String[]
     */
    public function letterCombinations($digits) {
        if (empty($digits)) {
            return [];
        }
        $letters = ["", "", "abc", "def", "ghi", "jkl", "mno", "pqrs", "tuv", "wxyz"];
        $ans = [];
        $curr = '';
        $this->findCombinations(0, $digits, $letters, $curr, $ans);
        return $ans;
    }

    private function findCombinations($start, $nums, $letters, &$curr, &$ans) {
        if (strlen($curr) == strlen($nums)) {
            $ans[] = $curr;
            return;
        }
        for ($i = $start; $i < strlen($nums); $i++) {
            $n = intval($nums[$i]);
            for ($j = 0; $j < strlen($letters[$n]); $j++) {
                $ch = $letters[$n][$j];
                $curr .= $ch;
                $this->findCombinations($i + 1, $nums, $letters, $curr, $ans);
                $curr = substr($curr, 0, -1);
            }
        }
    }
}
