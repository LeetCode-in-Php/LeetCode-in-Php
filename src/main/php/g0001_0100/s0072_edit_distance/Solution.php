<?php

namespace leetcode\g0001_0100\s0072_edit_distance;

// #Hard #Top_100_Liked_Questions #String #Dynamic_Programming
// #Algorithm_II_Day_18_Dynamic_Programming #Dynamic_Programming_I_Day_19
// #Udemy_Dynamic_Programming #Big_O_Time_O(n^2)_Space_O(n2)
// #2023_12_10_Time_29_ms_(75.00%)_Space_19.1_MB_(93.75%)

class Solution {
    /**
     * @param String $word1
     * @param String $word2
     * @return Integer
     */
    public function minDistance($word1, $word2) {
        $n1 = strlen($word1);
        $n2 = strlen($word2);
        if ($n2 > $n1) {
            return $this->minDistance($word2, $word1);
        }
        $dp = array_fill(0, $n2 + 1, 0);
        for ($j = 0; $j <= $n2; $j++) {
            $dp[$j] = $j;
        }
        for ($i = 1; $i <= $n1; $i++) {
            $pre = $dp[0];
            $dp[0] = $i;
            for ($j = 1; $j <= $n2; $j++) {
                $tmp = $dp[$j];
                $dp[$j] =
                    $word1[$i - 1] != $word2[$j - 1]
                        ? 1 + min($pre, min($dp[$j], $dp[$j - 1]))
                        : $pre;
                $pre = $tmp;
            }
        }
        return $dp[$n2];
    }
}
