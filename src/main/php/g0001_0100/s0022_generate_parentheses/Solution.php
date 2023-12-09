<?php

namespace leetcode\g0001_0100\s0022_generate_parentheses;

// #Medium #Top_100_Liked_Questions #Top_Interview_Questions #String #Dynamic_Programming
// #Backtracking #Algorithm_II_Day_11_Recursion_Backtracking #Udemy_Backtracking/Recursion
// #Big_O_Time_O(2^n)_Space_O(n) #2023_12_07_Time_4_ms_(83.67%)_Space_19.1_MB_(100.00%)

class Solution {
    /**
     * @param Integer $n
     * @return String[]
     */
    public function generateParenthesis(int $n): array {
        $sb = '';
        $ans = [];
        return $this->generate($sb, $ans, $n, $n);
    }

    private function generate(string &$sb, array &$ans, int $open, int $close): array {
        if ($open === 0 && $close === 0) {
            $ans[] = $sb;
            return $ans;
        }
        if ($open > 0) {
            $sb .= '(';
            $this->generate($sb, $ans, $open - 1, $close);
            $sb = substr($sb, 0, -1);
        }
        if ($close > 0 && $open < $close) {
            $sb .= ')';
            $this->generate($sb, $ans, $open, $close - 1);
            $sb = substr($sb, 0, -1);
        }
        return $ans;
    }
}
