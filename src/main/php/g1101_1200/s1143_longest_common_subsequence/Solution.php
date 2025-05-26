<?php

namespace leetcode\g1101_1200\s1143_longest_common_subsequence;

// #Medium #Top_100_Liked_Questions #String #Dynamic_Programming #LeetCode_75_DP/Multidimensional
// #Algorithm_II_Day_17_Dynamic_Programming #Dynamic_Programming_I_Day_19
// #Udemy_Dynamic_Programming #Big_O_Time_O(n*m)_Space_O(n*m)
// #2023_12_24_Time_191_ms_(96.00%)_Space_35.5_MB_(100.00%)

class Solution {
    /**
     * @param String $text1
     * @param String $text2
     * @return Integer
     */
    public function longestCommonSubsequence($text1, $text2) {
        $n = strlen($text1);
        $m = strlen($text2);
        $dp = array_fill(0, $n + 1, array_fill(0, $m + 1, 0));
        for ($i = 1; $i <= $n; $i++) {
            for ($j = 1; $j <= $m; $j++) {
                if ($text1[$i - 1] == $text2[$j - 1]) {
                    $dp[$i][$j] = $dp[$i - 1][$j - 1] + 1;
                } else {
                    $dp[$i][$j] = max($dp[$i - 1][$j], $dp[$i][$j - 1]);
                }
            }
        }
        return $dp[$n][$m];
    }
}
