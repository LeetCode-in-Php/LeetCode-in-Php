<?php

namespace leetcode\g0001_0100\s0032_longest_valid_parentheses;

// #Hard #Top_100_Liked_Questions #String #Dynamic_Programming #Stack #Big_O_Time_O(n)_Space_O(1)
// #2023_12_09_Time_8_ms_(67.65%)_Space_19.2_MB_(85.29%)

class Solution {
    /**
     * @param String $s
     * @return Integer
     */
    public function longestValidParentheses($s) {
        $max = 0;
        $left = 0;
        $right = 0;
        $n = strlen($s);
        for ($i = 0; $i < $n; $i++) {
            $ch = $s[$i];
            if ($ch == '(') {
                $left++;
            } else {
                $right++;
            }
            if ($right > $left) {
                $left = 0;
                $right = 0;
            }
            if ($left == $right) {
                $max = max($max, $left + $right);
            }
        }
        $left = 0;
        $right = 0;
        for ($i = $n - 1; $i >= 0; $i--) {
            $ch = $s[$i];
            if ($ch == '(') {
                $left++;
            } else {
                $right++;
            }
            if ($left > $right) {
                $left = 0;
                $right = 0;
            }
            if ($left == $right) {
                $max = max($max, $left + $right);
            }
        }
        return $max;
    }
}
